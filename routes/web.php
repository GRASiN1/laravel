<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Jobs::allJobs()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Jobs::findOne($id);
    return view('job', ['job' => $job]);

});

Route::get('/contact', function () {
    return view('contact');
});