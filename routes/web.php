<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('home', [
        'greeting' => 'Hello'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(3),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});
