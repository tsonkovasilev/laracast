<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;




Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs'=> Job::all()
    ]);
});

Route::get('/job/{id}', function ($id) {

    $job = Job::find($id);
    
    return view('job',['job'=>$job]);
});

Route::get('/contact', function () {
    return view('contact');
});

