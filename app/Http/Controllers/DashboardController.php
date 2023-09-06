<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // client dashboard
    public function client()
    {
        // featured services
        $cleaning = User::where('role', 'worker')->where('service', 'cleaning')->get();
        $electrical = User::where('role', 'worker')->where('service', 'electrical')->get();
        $plumbing = User::where('role', 'worker')->where('service', 'plumbing')->get();
        $pest_control = User::where('role', 'worker')->where('service', 'pest control')->get();
        $auto_care = User::where('role', 'worker')->where('service', 'auto care')->get();

        // featured workers
        $workers = User::where('role', 'worker')
        ->inRandomOrder()
        ->take(5)
        ->get();

        // your jobs
        $jobs = Job::latest()->orderBy('created_at', 'desc')->take(5)->get();

        // recent transactions
        $user = Auth::user();
        $transactions = Transaction::where('client_id', $user->id)->orderBy('created_at', 'desc')->take(5)->get();

        // your workers
        $oldWorkerIds = Job::where('status', 'completed')
        ->where('client_id', $user->id)
        ->pluck('worker_id');
        $oldWorkerIdsArray = $oldWorkerIds->toArray();

        $oldWorkers = User::where('id', $oldWorkerIdsArray)
        ->where('role', 'worker')
        ->get();

        return view('client.dashboard', compact('workers', 'jobs', 'transactions', 'cleaning', 'electrical', 'plumbing', 'pest_control', 'auto_care', 'oldWorkers'));
    }



    // worker dashboard
    public function worker()
    {
        $user = Auth::user();

        // featured jobs
        $jobs = Job::where('status', 'available')
        ->inRandomOrder()
        ->take(5)
        ->get();

        // ongoing jobs
        $ongoingJobs = Job::where('status', 'ongoing')
        ->where('worker_id', $user->id)
        ->get();

        // recent transactions
        $transactions = Transaction::where('worker_id', $user->id)
        ->inRandomOrder()
        ->take(5)
        ->get();

        return view('worker.dashboard', compact('jobs', 'transactions', 'ongoingJobs'));
    }



    // admin dashboard
    public function admin()
    {
        // clients
        $clients = User::where('role', 'client')
        ->inRandomOrder()
        ->take(5)
        ->get();

        // workers
        $workers = User::where('role', 'worker')
        ->inRandomOrder()
        ->take(5)
        ->get();

        // recent transactions
        $transactions = Transaction::latest()
        ->take(5)
        ->get();

        return view('admin.dashboard', compact('clients', 'workers', 'transactions'));
    }
}
