<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\Rating;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Resume;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;

class WorkerController extends Controller
{
        // porifle page starts
        public function profileView(Request $request){
            return view('worker.profile', [
                'user' => $request->user(),
            ]);
        }

        public function profileUpdate(Request $request){
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

            return Redirect::route('worker.profile.view');
        }
        // profile page ends


        // available jobs page starts
        public function viewAvailableJobs(){
            $user = Auth::user();

            $jobs = Job::where('status', 'available')
            ->where('service', $user->service)
            ->get();

            return view('worker.available-jobs', compact('jobs'));
        }
        // available jobs page ends



        // job details page starts
        public function viewJob($id){
            $user = Auth::user();

            $job = Job::findOrFail($id);
            return view('worker.job', compact('user', 'job'));
        }

        public function jobApplication(Request $request)
        {
            $application = new Application();
            $application->client_id = $request->input('client_id');
            $application->worker_id = $request->input('worker_id');
            $application->worker_name = $request->input('worker_name');
            $application->worker_email = $request->input('worker_email');
            $application->worker_application_message = $request->input('worker_application_message');
            $application->job_id = $request->input('job_id');
            $application->job_title = $request->input('job_title');
            $application->job_service = $request->input('job_service');
            $application->save();

            return redirect()->route('worker.available-jobs');
        }
        // job details page ends


        // completed jobs page starts
        public function viewCompletedJobs(){
            $completedJobs = Job::where('status', 'completed')
            ->get();

            return view('worker.completed-jobs', compact('completedJobs'));
        }
        // completed jobs page ends


        // completed job page starts
        public function viewCompletedJob($id){
            $user = Auth::user();
            $job = Job::findOrFail($id);
            $client = User::findOrFail($job->client_id);

            $rating = Rating::where('worker_id', $user->id)->first();

            return view('worker.completed-job', compact('job', 'client', 'rating'));
        }
        // completed job page ends


        // transactions page starts
        public function viewTransactions(){
            $user = Auth::user();
            $transactions = Transaction::where('worker_id', $user->id)->get();

            return view('worker.transactions', compact('transactions'));
        }
        // transactions page ends


        // transaction page starts
        public function viewTransaction($id){
            $transaction = Transaction::findOrFail($id);
            $client = User::findOrFail($transaction->client_id);
            $worker = User::findOrFail($transaction->worker_id);
            $job = Job::findOrFail($transaction->job_id);

            return view('worker.transaction', compact('transaction', 'client', 'worker', 'job'));
        }
        // transaction page ends


        // resume builder page starts
        public function viewResumeBuilder(Request $request)
        {
            $user = Auth::user();
            return view('worker.resume-builder', compact('user'));
        }

        public function buildResume(Request $request)
        {
            $job = new Resume();
            $job->worker_id = $request->input('worker_id');
            $job->worker_name = $request->input('worker_name');
            $job->worker_email = $request->input('worker_email');
            $job->worker_phone = $request->input('worker_phone');
            $job->worker_address = $request->input('worker_address');
            $job->worker_service = $request->input('worker_service');
            $job->nationality = $request->input('nationality');
            $job->birth_date = $request->input('birth_date');
            $job->religion = $request->input('religion');
            $job->marital_status = $request->input('marital_status');
            $job->designation_1 = $request->input('designation_1');
            $job->designation_2 = $request->input('designation_2');
            $job->workplace_1 = $request->input('workplace_1');
            $job->workplace_2 = $request->input('workplace_2');
            $job->time_frame_1 = $request->input('time_frame_1');
            $job->time_frame_2 = $request->input('time_frame_2');
            $job->description_1 = $request->input('description_1');
            $job->description_2 = $request->input('description_2');
            $job->exam_1 = $request->input('exam_1');
            $job->exam_2 = $request->input('exam_2');
            $job->institute_1 = $request->input('institute_1');
            $job->institute_2 = $request->input('institute_2');
            $job->session_1 = $request->input('session_1');
            $job->session_2 = $request->input('session_2');
            $job->details_1 = $request->input('details_1');
            $job->details_2 = $request->input('details_2');
            $job->save();

            return redirect()->route('worker.resume');
        }
        // resume builder page ends


        // resume page starts
        public function viewResume()
        {
            $user = Auth::user();

            $resume = Resume::latest('created_at')
            ->where('worker_id', $user->id)
            ->first();

            return view('worker.resume', compact('resume', 'user'));
        }
        // resume page ends


        // track jobs page starts
        public function viewTracks(){
            $user = Auth::user();

            $jobs = Job::where('status', 'ongoing')
            ->where('worker_id', $user->id)
            ->get();

            return view('worker.tracks', compact('jobs'));
        }
        // track jobs page ends


        // track job page starts
        public function viewTrack($id){
            $job = Job::findOrFail($id);
            $client = User::findOrFail($job->client_id);
            $track = Tracking::where('job_id', $id)->first();

            return view('worker.track', compact('job', 'client', 'track'));
        }

        public function trackStatus2($id){
            $job = Job::findOrFail($id);
            $track = Tracking::where('job_id', $id)->first();
            if ($track) {
                $track->status = '2';
                $track->save();
            }

            return redirect(route('worker.track.job', [$job->id]));
        }

        public function trackStatus3($id){
            $job = Job::findOrFail($id);
            $track = Tracking::where('job_id', $id)->first();
            if ($track) {
                $track->status = '3';
                $track->save();
            }

            return redirect(route('worker.track.job', [$job->id]));
        }

        public function trackStatus4($id){
            $job = Job::findOrFail($id);
            $track = Tracking::where('job_id', $id)->first();
            if ($track) {
                $track->status = '4';
                $track->save();
            }

            return redirect(route('worker.track.job', [$job->id]));
        }
        // track job page ends
}