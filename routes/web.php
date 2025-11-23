<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/singalProduct', function () {
    return view('singalProduct');
});

Route::get('/foundItem', function () {
    return view('foundItem');
})->name('foundItem');

Route::get('/lostItem', function () {
    return view('lostItem');
})->name('lostItem');

Route::get('/reportItem', function () {
    return view('reportItem');
})->name('reportItem');