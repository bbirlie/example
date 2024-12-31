<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'Teacher',
                'salary' => '10000'

            ],
            [
                'title' => 'Brogrammer',
                'salary' => '50000'
            ],
            [
                'title' => 'Onlyfan',
                'salary' => '99999'
            ]
        ],
        'greeting' => 'Hello'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
