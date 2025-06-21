<?php

namespace routes;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;

Route::get('/', function () {
    return view('welcome');
});

Route
    ::middleware('api')
    ->prefix("api")
    ->group(function () {
        Route::get('/apartments', [ApartmentController::class, 'apartments']);
        Route::get('/apartment', [ApartmentController::class, 'apartment']);
    });


