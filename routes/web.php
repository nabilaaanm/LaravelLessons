<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rv', function(){
    return view('revaview');
})->name('rv');

