<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index()
    {
        return Vehicle::all();
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

    public function update(Request $request, $id)
    {
        
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());
        $vehicle->save();
        return $vehicle;
    }

    public function destroy(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return 204;
    }
}
