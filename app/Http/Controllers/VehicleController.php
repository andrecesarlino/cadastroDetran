<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return Vehicle::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Vehicle::create($request->all());
    }

    public function show($id)
    {
        return Vehicle::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return $vehicle;
    }


    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return response()->json(null, 204);

    }
}
