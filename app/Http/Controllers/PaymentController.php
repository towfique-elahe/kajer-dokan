<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tracking;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function viewCheckout(Request $request, $id)
    {
        // client
        $user = Auth::user();
        $amount = $request->amount;

        // worker
        $worker = User::findOrFail($id);

        // taking job info
        $jobs = Job::where('client_id', $user->id)->where('service', $worker->service)->get();

        return view('client.checkout', compact('user', 'amount', 'worker', 'jobs'));
    }

    public function processCheckout(Request $request, $id)
    {
        // client
        $user = Auth::user();
        // worker
        $worker = User::findOrFail($id);

        // creatin stripe payment
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $service = $worker->service;
        $totalprice = $request->get('price');
        $two0 = "00";
        $total = "$totalprice$two0";

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'BDT',
                        'product_data' => [
                            "name" => $service,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('stripe.checkout-success'),
            'cancel_url'  => route('stripe.checkout-cancel'),
        ]);

        // creating transactions
        $transaction = new Transaction();
        $transaction->client_id = $user->id;
        $transaction->worker_id = $worker->id;
        $transaction->job_id = $request->get('job_id');
        $transaction->amount = $request->get('price');
        $transaction->service = $worker->service;
        $transaction->save();

        // making job status ongoing after payment and assign worker_id
        $jobId = $request->input('job_id');
        $job = Job::find($jobId);
        if ($job) {
            $job->worker_id = $worker->id;
            $job->status = 'ongoing';
            $job->save();
        }

        // creating tracking
        $track = new Tracking();
        $track->client_id = $user->id;
        $track->worker_id = $worker->id;
        $track->job_id = $request->get('job_id');
        $track->status = '1';
        $track->save();

        return redirect()->away($session->url);
    }

    public function checkoutSuccess()
    {
        return view('client.checkout-success');
    }

    public function checkoutCancel()
    {
        return view('client.checkout-cancel');
    }
}
