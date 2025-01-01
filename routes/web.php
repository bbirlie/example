<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Teacher',
                'salary' => '10000'

            ],
            [
                'id' => 2,
                'title' => 'Brogrammer',
                'salary' => '50000'
            ],
            [
                'id' => 3,
                'title' => 'Onlyfan',
                'salary' => '99999'
            ]
        ],
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Teacher',
            'salary' => '10000'

        ],
        [
            'id' => 2,
            'title' => 'Brogrammer',
            'salary' => '50000'
        ],
        [
            'id' => 3,
            'title' => 'Onlyfan',
            'salary' => '99999'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});
