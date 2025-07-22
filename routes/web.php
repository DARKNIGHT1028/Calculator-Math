<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('calculator');
});

Route::post('/calculate', 'App\Http\Controllers\CalculatorController@calculate')->name('calculate');
