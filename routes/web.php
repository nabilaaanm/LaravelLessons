<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abilaanjm', action:function(){
    return view('Nabilaview');

})->name(name: 'nabila');
