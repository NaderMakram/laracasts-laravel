<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['title' => 'Software Engineer', 'salary' => '$50,000', 'id' => 1],
            ['title' => 'Data Analyst', 'salary' => '$90,000', 'id' => 2],
            ['title' => 'Web Developer', 'salary' => '$22,000', 'id' => 3],
        ],
    ]);
});


Route::get('/job/{id}', function ($id) {
    $jobs =  [
        ['title' => 'Software Engineer', 'salary' => '$50,000', 'id' => 1],
        ['title' => 'Data Analyst', 'salary' => '$90,000', 'id' => 2],
        ['title' => 'Web Developer', 'salary' => '$22,000', 'id' => 3],
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job);
    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
