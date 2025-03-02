<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Project Manager',
                'salary' => '$50,000'
            ],
            [
                'title' => 'Web Developer',
                'salary' => '$80,000'
            ],
            [
                'title' => 'Web Designer',
                'salary' => '$60,000'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});