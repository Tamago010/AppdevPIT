<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentlistcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/student_lists", studentlistcontroller::class);