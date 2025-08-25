<?php

use Illuminate\Support\Facades\Route;

Route::get('welcome/welcome', function () {
    return view('welcome');
});
