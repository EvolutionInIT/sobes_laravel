<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ApartmentResource;

class ApartmentController
{
    /**
     * Display a listing of the apartments.
     * @return JsonResponse
     */
    public function apartments(): \Illuminate\Http\JsonResponse
    {
        //сколько запросов к бд сгенерирует этот код?
        //как его оптимизировать?
        $apartments = Apartment::all();

        foreach ($apartments as $apartment) {
            $apartment->owners;
        }

        return response()->json(['data' => $apartments]);
    }

    /**
     * @param ApartmentRequest $request
     * @return ApartmentResource
     */
    public function apartment(ApartmentRequest $request): ApartmentResource
    {
        $apartment = Apartment
            ::where('apartment_id', $request->id)
            ->first();

        return new ApartmentResource($apartment);
    }
}
