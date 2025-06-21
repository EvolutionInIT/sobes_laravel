<?php

namespace App\Http\Controllers;

use App\Models\Apartment;

class ApartmentController
{
    /**
     * Display a listing of the apartments.
     */
    public function apartments(): \Illuminate\Http\JsonResponse
    {
        //сколько запросов к бд сгенерирует этот код?
        //как его оптимизировать?
        $apartments = Apartment::get();

        foreach ($apartments as $apartment) {
            $apartment->owners;
        }

        return response()->json(['data' => $apartments]);
    }
}
