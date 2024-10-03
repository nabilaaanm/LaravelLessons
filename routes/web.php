<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/rv', function(){
    return view('revaview');
})->name('rv');

Route::get('/uyelhihi', function(){ // uri = nama link
    return view('AurelView');
})->name('aurel');

Route::get('/teriru', function () {
    return view('teraView');
})->name('tera');


