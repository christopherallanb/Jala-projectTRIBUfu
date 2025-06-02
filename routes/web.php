<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/car-details', function () {
    return view('car-details');
})->name('car.details');

Route::get('/for-companies', function () {
    return view('confirmation');
})->name('for.companies');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');