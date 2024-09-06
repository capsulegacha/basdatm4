<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/hobby', function () {
    return view('hobby');
});

Route::get('/favorites', function () {
    return view('favorites');
});

Route::get('/lucky', function () {
    return view('lucky');
});
