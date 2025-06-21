<?php

namespace routes;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;

Route::get('/', function () {
    return view('welcome');
});

Route
    ::middleware('api')
    ->get('/apartments', [ApartmentController::class, 'apartments']);
