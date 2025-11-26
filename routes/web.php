<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sign', function () {
    return view('user.sign');
})->name('sign');


//found item
Route::get('/item/found/add', function ($id) {
    return view('item.found.view');
})->name('item-found-add');

Route::get('/item/found/list', function ($id) {
    return view('item.found.view', compact('id'));
})->name('item-found-list');

Route::get('/item/found/view/{id}', function () {
    return view('item.found.view');
})->name('item-found-view');

//lost item
Route::get('/item/lost/add', function ($id) {
    return view('item.lost.view');
})->name('item-lost-add');

Route::get('/item/lost/list', function ($id) {
    return view('item.lost.view', compact('id'));
})->name('item-lost-list');

Route::get('/item/lost/view/{id}', function () {
    return view('item.lost.view');
})->name('item-lost-view');
