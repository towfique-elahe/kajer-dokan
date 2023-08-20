<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\Rating;
use App\Models\Resume;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    // porifle page starts
    public function profileView(Request $request)
    {
        return view('client.profile', [
            'user' => $request->user(),
        ]);
    }

    public function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data ->name = $request->name;
        $data -> email = $request ->email;
        $data -> role = $request ->role;
        $data ->phone = $request ->phone;
        $data ->address = $request ->address;

        if ($request->file('image')) //profile_image is db image field name
        {
            $file = $request->file('image'); //here profile image is database image field name
            $filename = date('ymdHi') . $file->getClientOriginalName(); // renaming the image. video image update part 4
            $file->move(public_path('upload'), $filename); // saving the image in public folder. under public/upload/admin_image folder.
            $data['image'] = $filename;
        }
        $data->save();

        return Redirect::route('client.profile.view')->with('status', 'profile-updated');
    }
    // profile page ends


    // services page starts
    public function viewServices(){
        // service wise workers count
        $cleaning = User::where('role', 'worker')->where('service', 'cleaning')->get();
        $electrical = User::where('role', 'worker')->where('service', 'electrical')->get();
        $plumbing = User::where('role', 'worker')->where('service', 'plumbing')->get();
        $pest_control = User::where('role', 'worker')->where('service', 'pest control')->get();
        $auto_care = User::where('role', 'worker')->where('service', 'auto care')->get();

        return view('client.services', compact('cleaning', 'electrical', 'plumbing', 'pest_control', 'auto_care'));
    }
    // services page ends


    // your jobs page starts
    public function jobPost(Request $request){
        $job = new Job();
        $job->client_id = $request->input('client_id');
        $job->title = $request->input('title');
        $job->service = $request->input('service');
        $job->location = $request->input('location');
        $job->phone = $request->input('phone');
        $job->description = $request->input('description');
        $job->status = $request->input('status');
        $job->save();

        return $this->jobsView();
    }

    public function jobsView(){
        $user = Auth::user();
        $availableJobs = Job::where('client_id', $user->id)
        ->where('status', 'available')
        ->get();
        $completedJobs = Job::where('client_id', $user->id)
        ->where('status', 'completed')
        ->get();
        return view('client.jobs', compact('availableJobs', 'completedJobs'));
    }

    public function jobDelete($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('client.jobs');
    }
    // your jobs page ends


    // job details page starts
    public function viewJob($id){
        $user = Auth::user();

        $job = Job::findOrFail($id);
        return view('client.job', compact('user', 'job'));
    }
    // job details page ends


    // workers page starts
    public function viewWorkers(){
        $workers = User::where('role', 'worker')->get();

        foreach ($workers as $worker) {
            $averageRating = Rating::where('worker_id', $worker->id)
                ->avg('rating');

            $roundedAverage = round($averageRating, 2);

            $worker->rating = $roundedAverage;
        }

        return view('client.workers', compact('workers'));
    }

    // workers page ends


    // worker profie page starts
    public function viewWorker($id){
        $worker = User::findOrFail($id); // Retrieve the worker by their ID

        $resume = Resume::latest('created_at')
        ->where('worker_id', $worker->id)
        ->first();

        return view('client.worker', compact('worker', 'resume'));
    }
    // worker profie page ends


    // transactions page starts
    public function viewTransactions(){
        $user = Auth::user();
        $transactions = Transaction::where('client_id', $user->id)->get();
        return view('client.transactions', compact('transactions'));
    }
    // transactions page ends


    // transaction details page starts
    public function viewTransaction($id){
        $transaction = Transaction::findOrFail($id);
        $client = User::findOrFail($transaction->client_id);
        $worker = User::findOrFail($transaction->worker_id);
        $job = Job::findOrFail($transaction->job_id);

        return view('client.transaction', compact('transaction', 'client', 'worker', 'job'));
    }
    // transaction details page ends


    // job request page starts
    public function viewRequests()
    {
        $client_id = Auth::user()->id;

        $requests = Application::where('client_id', $client_id)->get();
        return view('client.request', compact('requests'));
    }

    public function deleteRequest(Application $request){
        $request->delete();
        return redirect()->back();
    }
    // job request page ends


    // tracks page starts
    public function viewTracks(){
        $jobs = Job::where('status', 'ongoing')->get();

        return view('client.tracks', compact('jobs'));
    }
    // tracks page ends


    // track page starts
    public function viewTrack($id){
        $user = Auth::user();
        $job = Job::findOrFail($id);
        $track = Tracking::where('job_id', $id)->first();
        $worker = User::findOrFail($track->worker_id);

        return view('client.track', compact('user', 'job', 'track', 'worker'));
    }

    public function completeTracking(Request $request, $id){
        $track = Tracking::findOrFail($id);

        $job = Job::findOrFail($track->job_id);
        if ($job) {
            $job->status = 'completed';
            $job->save();
        }

        // creating rating
        $rate = new Rating();
        $rate->client_id = $request->get('client_id');
        $rate->worker_id = $request->get('worker_id');
        $rate->job_id = $request->get('job_id');
        $rate->rating = $request->get('rating');
        $rate->save();

        return redirect(route('client.jobs'));
    }
    // track page ends
}