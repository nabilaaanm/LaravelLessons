<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teriru', function () {
    return view('teraView');
})->name('tera');
