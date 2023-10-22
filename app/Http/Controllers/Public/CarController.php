<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    /**
     * Display a listing of the resource with optional filters, limit, and page.
     */
    public function index(Request $request): Response
    {
        $make = $request->query('make');
        $model = $request->query('model');
        $vin = $request->query('vin');
        $lot = $request->query('lot');
        $limit = $request->query('limit', 9); // Default to 9 items per page if not specified.
        $page = $request->query('page', 1); // Default to the first page if not specified.

        $query = Car::query();

        if ($make) {
            $query->where('make', $make);
        }

        if ($model) {
            $query->where('model', $model);
        }

        if ($vin) {
            $query->where('vin', $vin);
        }

        if ($lot) {
            $query->where('lot_number', $lot);
        }

        $cars = $query->paginate($limit, ['*'], 'page', $page);

        return response([
            'cars' => $cars
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car): Response
    {
        $car->load('details', 'photos');

        return response([
            'car' => $car
        ]);
    }

    /**
     * Get a list of all car makes.
     */
    public function makes(): Response
    {
        $makes = Car::distinct('make')->pluck('make');

        return response([
            'makes' => $makes
        ]);
    }

    /**
     * Get a list of all models for a specific make.
     */
    public function models(string $make): Response
    {
        $models = Car::where('make', $make)
            ->distinct('model')
            ->pluck('model');

        return response([
            'models' => $models
        ]);
    }
}
