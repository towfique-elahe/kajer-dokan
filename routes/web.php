<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

// GENERAL PAGES
Route::get('/', function () {
    return view('general/home'); //HOME PAGE
})->name('home');

Route::get('/about', function () {
    return view('general/about'); //ABOUT PAGE
})->name('about');

Route::get('/contact', function () {
    return view('general/contact'); //CONTACT PAGE
})->name('contact');

// REGISTER PAGE
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// LOGIN PAGE
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// LOGOUT METHOD
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// ADMIN'S PAGES
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    Route::get('/admin/client', function () {
        return view('admin.client');
    })->name('admin.client');

    Route::get('/admin/clients', function () {
        return view('admin.clients');
    })->name('admin.clients');

    Route::get('/admin/eidt-client', function () {
        return view('admin.edit-client');
    })->name('admin.eidt-client');

    Route::get('/admin/edit-worker', function () {
        return view('admin.edit-worker');
    })->name('admin.edit-worker');

    Route::get('/admin/edit-worker-resume', function () {
        return view('admin.edit-worker-resume');
    })->name('admin.edit-worker-resume');

    Route::get('/admin/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');

    Route::get('/admin/transactions', function () {
        return view('admin.transactions');
    })->name('admin.transactions');

    Route::get('/admin/worker', function () {
        return view('admin.worker');
    })->name('admin.worker');

    Route::get('/admin/worker-resume', function () {
        return view('admin.worker-resume');
    })->name('admin.worker-resume');

    Route::get('/admin/workers', function () {
        return view('admin.workers');
    })->name('admin.workers');
});


// CLIENT'S PAGES
Route::middleware(['auth', 'role:client'])->group(function () {

    Route::get('/client/dashboard', [DashboardController::class, 'client'])->name('client.dashboard');


    Route::get('/client/jobs', [ClientController::class, 'jobsView'])->name('client.jobs');
    Route::post('/client/jobs', [ClientController::class, 'jobPost'])->name('client.job.post');
    Route::get('/client/job/{id}', [ClientController::class, 'viewJob'])->name('client.job.view');
    Route::delete('/client/job/{id}', [ClientController::class, 'jobDelete'])->name('client.job.delete');


    Route::get('/client/profile', [ClientController::class, 'profileView'])->name('client.profile.view');
    Route::post('/client/profile', [ClientController::class, 'profileUpdate'])->name('client.profile.update');


    Route::get('/client/request', [ClientController::class, 'viewRequests'])->name('client.request');
    Route::delete('/client/request/delete/{request}', [ClientController::class, 'deleteRequest'])->name('client.request.delete');


    Route::get('/client/services', [ClientController::class, 'viewServices'])->name('client.services');


    Route::get('/client/track-jobs', [ClientController::class, 'viewTracks'])->name('client.tracks');
    Route::get('/client/track-job/{id}', [ClientController::class, 'viewTrack'])->name('client.track');
    Route::post('/client/complete-track/{id}', [ClientController::class, 'completeTracking'])->name('client.track.complete');


    Route::get('/client/transactions', [ClientController::class, 'viewTransactions'])->name('client.transactions');
    Route::get('/client/transaction/{id}', [ClientController::class, 'viewTransaction'])->name('client.transaction');


    Route::get('/client/worker/{id}', [ClientController::class, 'viewWorker'])->name('client.worker');


    Route::get('/client/workers', [ClientController::class, 'viewWorkers'])->name('client.workers');


    // payment
    Route::get('/client/checkout/{id}', [PaymentController::class, 'viewCheckout'])->name('client.checkout');
    Route::post('/client/process-checkout/{id}', [PaymentController::class, 'processCheckout'])->name('client.checkout.process');
    Route::get('/stripe/checkout-success', [PaymentController::class, 'checkoutSuccess'])->name('stripe.checkout-success');
    Route::get('/stripe/checkout-cancel', [PaymentController::class, 'checkoutCancel'])->name('stripe.checkout-cancel');
});


// WORKER'S PAGES
Route::middleware(['auth', 'role:worker'])->group(function () {

    Route::get('/worker/dashboard', [DashboardController::class, 'worker'])->name('worker.dashboard');


    Route::get('/worker/available-jobs', [WorkerController::class, 'viewAvailableJobs'])->name('worker.available-jobs');


    Route::get('/worker/completed-job', function () {
        return view('worker.completed-job');
    })->name('worker.completed-job');


    Route::get('/worker/completed-jobs', [WorkerController::class, 'viewCompletedJobs'])->name('worker.completed-jobs');
    Route::get('/worker/completed-job/{id}', [WorkerController::class, 'viewCompletedJob'])->name('worker.completed-job');


    Route::get('/worker/job/{id}', [WorkerController::class, 'viewJob'])->name('worker.job');
    Route::post('/worker/job/', [WorkerController::class, 'jobApplication'])->name('worker.job.application');


    Route::get('/worker/profile', [WorkerController::class, 'profileView'])->name('worker.profile.view');
    Route::post('/worker/profile', [WorkerController::class, 'profileUpdate'])->name('worker.profile.update');


    Route::get('/worker/resume', [WorkerController::class, 'viewResume'])->name('worker.resume');


    Route::get('/worker/resume-builder', [WorkerController::class, 'viewResumeBuilder'])->name('worker.resume-builder');
    Route::post('/worker/resume-builder', [WorkerController::class, 'buildResume'])->name('worker.resume.build');


    Route::get('/worker/transactions', [WorkerController::class, 'viewTransactions'])->name('worker.transactions');
    Route::get('/worker/transaction/{id}', [WorkerController::class, 'viewTransaction'])->name('worker.transaction');


    Route::get('/worker/track-jobs', [WorkerController::class, 'viewTracks'])->name('worker.track.jobs');
    Route::get('/worker/track-job/{id}', [WorkerController::class, 'viewTrack'])->name('worker.track.job');
    Route::post('/worker/track-job/{id}/status2', [WorkerController::class, 'trackStatus2'])->name('worker.track.job.status2');
    Route::post('/worker/track-job/{id}/status3', [WorkerController::class, 'trackStatus3'])->name('worker.track.job.status3');
    Route::post('/worker/track-job/{id}/status4', [WorkerController::class, 'trackStatus4'])->name('worker.track.job.status4');
});
