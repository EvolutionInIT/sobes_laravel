<?php

namespace App\Http\Controllers;

use App\Models\Apartment;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the apartments.
     */
    public function apartments(): \Illuminate\Http\JsonResponse
    {
        //сколько запросов к бд сгенерирует этот код?
        //как его оптимизировать?
        $apartments = Apartment::all();

        foreach ($apartments as $apartment) {
            $apartment->owners;
        }

        return response()->json($apartments);
    }
}
