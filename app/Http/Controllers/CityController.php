<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
        return City::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return City::create($request->all());
    }

    public function show($id)
    {
        return City::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(null, 204);

    }
}
