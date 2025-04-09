<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});


use App\Http\Controllers\ActivityController;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/a-propos', function () {
    return view('a_propos'); // à créer dans resources/views
});

Route::get('/anciens', function () {
    return view('anciens'); // à créer
});

Route::get('/vie-a-dakar', function () {
    return view('vie_dakar'); // à créer
});

Route::get('/contact', function () {
    return view('contact'); // à créer
});
Route::get('/bureau', function () {
    return view('bureau'); // à créer
});


Route::resource('activities', ActivityController::class);
