<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function show(Car $car)
    {
        return $car;
    }

    public function store(Request $request)
    {
        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function update(Request $request, Car $car)
    {
        $car->update($request->all());

        return response()->json($car, 200);
    }

    public function delete(Car $car)
    {
        $car->delete();

        return response()->json(null, 204);
    }
}
