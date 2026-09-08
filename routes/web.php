<?php

use Illuminate\Support\Facades\Route;

// define your routes here
Route::get('/', function () {
    return view('welcome');
});
