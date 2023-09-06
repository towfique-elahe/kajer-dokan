<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Rating;
use App\Models\Resume;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // workers page starts
    public function viewWorkers(){
        $workers = User::where('role', 'worker')->get();

        foreach ($workers as $worker) {
            $averageRating = Rating::where('worker_id', $worker->id)
                ->avg('rating');

            $roundedAverage = round($averageRating, 2);

            $worker->rating = $roundedAverage;
        }

        return view('admin.workers', compact('workers'));
    }
    // workers page ends


    // worker profie page starts
    public function viewWorker($id){
        $worker = User::findOrFail($id); // Retrieve the worker by their ID

        return view('admin.worker', compact('worker'));
    }

    public function deleteWorker($id){
        $worker = User::findOrFail($id);
        $worker->delete();

        return redirect(route('admin.workers'));
    }
    // worker profie page ends


    // edit worker profile page starts
    public function workerProfileEdit($id){
        $worker = User::findOrFail($id);

        return view('admin.edit-worker', compact('worker'));
    }

    public function workerProfileUpdate(Request $request, $id){
        $worker = User::find($id);
        $worker -> name = $request->name;
        $worker -> email = $request ->email;
        $worker -> role = $request ->role;
        $worker -> phone = $request ->phone;
        $worker -> address = $request ->address;
        $worker->save();

        return redirect(route('admin.worker', ['id' => $worker->id]));
    }
    // edit worker profile page ends


    // worker resume page starts
    public function viewWorkerResume($id){
        $worker = User::findOrFail($id);
        $resume = Resume::latest('created_at')
        ->where('worker_id', $worker->id)
        ->first();

        return view('admin.worker-resume', compact('worker', 'resume'));
    }

    public function deleteWorkerResume($id){
        $resume = Resume::findOrFail($id);
        $resume->delete();

        return redirect()->back();
    }
    // worker resume page ends


    // worker resume edit page starts
    public function editWorkerResume($id){
        $worker = User::findOrFail($id);
        $resume = Resume::latest('created_at')
        ->where('worker_id', $worker->id)
        ->first();

        return view('admin.edit-worker-resume', compact('worker', 'resume'));
    }

    public function updateWorkerResume(Request $request){
        $resume = new Resume();
        $resume->worker_id = $request->input('worker_id');
        $resume->worker_name = $request->input('worker_name');
        $resume->worker_email = $request->input('worker_email');
        $resume->worker_phone = $request->input('worker_phone');
        $resume->worker_address = $request->input('worker_address');
        $resume->worker_service = $request->input('worker_service');
        $resume->nationality = $request->input('nationality');
        $resume->birth_date = $request->input('birth_date');
        $resume->religion = $request->input('religion');
        $resume->marital_status = $request->input('marital_status');
        $resume->designation_1 = $request->input('designation_1');
        $resume->designation_2 = $request->input('designation_2');
        $resume->workplace_1 = $request->input('workplace_1');
        $resume->workplace_2 = $request->input('workplace_2');
        $resume->time_frame_1 = $request->input('time_frame_1');
        $resume->time_frame_2 = $request->input('time_frame_2');
        $resume->description_1 = $request->input('description_1');
        $resume->description_2 = $request->input('description_2');
        $resume->exam_1 = $request->input('exam_1');
        $resume->exam_2 = $request->input('exam_2');
        $resume->institute_1 = $request->input('institute_1');
        $resume->institute_2 = $request->input('institute_2');
        $resume->session_1 = $request->input('session_1');
        $resume->session_2 = $request->input('session_2');
        $resume->details_1 = $request->input('details_1');
        $resume->details_2 = $request->input('details_2');
        $resume->save();

        $workerId = $request->input('worker_id');

        return redirect()->route('admin.worker-resume', ['id' => $workerId]);
    }
    // worker resume edit page ends


    // clients page starts
    public function viewClients(){
        $clients = User::where('role', 'client')->get();

        return view('admin.clients', compact('clients'));
    }
    // clients page ends


    // client profile page starts
    public function viewClient($id){
        $client = User::findOrFail($id);

        return view('admin.client', compact('client'));
    }

    public function deleteClient($id){
        $client = User::findOrFail($id);
        $client->delete();

        return redirect(route('admin.clients'));
    }
    // client profile page ends


    // edit client profie page starts
    public function editClient($id){
        $client = User::findOrFail($id);

        return view('admin.edit-client', compact('client'));
    }

    public function updateClient(Request $request, $id){
        $client = User::find($id);
        $client -> name = $request->name;
        $client -> email = $request ->email;
        $client -> role = $request ->role;
        $client -> phone = $request ->phone;
        $client -> address = $request ->address;
        $client->save();

        return redirect(route('admin.client', ['id' => $client->id]));
    }
    // edit client profie page ends


    // transactions page starts
    public function viewTransactions(){
        $transactions = Transaction::all();

        return view('admin.transactions', compact('transactions'));
    }
    // transactions page ends


    // transaction page starts
    public function viewTransaction($id){
        $transaction = Transaction::findOrFail($id);
        $client = User::findOrFail($transaction->client_id);
        $worker = User::findOrFail($transaction->worker_id);
        $job = Job::findOrFail($transaction->job_id);

        return view('admin.transaction', compact('transaction', 'client', 'worker', 'job'));
    }
    // transaction page ends
}