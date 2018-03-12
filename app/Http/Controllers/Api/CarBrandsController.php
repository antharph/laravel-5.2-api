<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CarBrand;

class CarBrandsController extends Controller
{
    public function index()
    {
        return CarBrand::all();
    }

    public function show(CarBrand $carBrand)
    {
        return $carBrand;
    }

    public function store(Request $request)
    {
        $carBrand = CarBrand::create($request->all());

        return response()->json($carBrand, 201);
    }

    //add hidden field _method=PUT but POST request
    public function update(Request $request, CarBrand $carBrand)
    {
        $carBrand->update($request->all());

        return response()->json($carBrand, 200);
    }

    //add hidden field _method=DELETE but POST request
    public function delete(CarBrand $carBrand)
    {
        $carBrand->delete();

        return response()->json(null, 204);
    }
}
