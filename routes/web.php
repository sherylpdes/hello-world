<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'World',
        'name' => 'Sheryl Pricilla Daniela Elizabeth Silalahi',
        'class' => 'TIF K 221',
        'nim' => 22552011122,
    ]);
});