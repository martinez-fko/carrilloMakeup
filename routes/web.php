<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/servicios', function () {
    return view('pages.services');
})->name('services');

Route::get('/galeria', function () {
    return view('pages.gallery');
})->name('gallery');
