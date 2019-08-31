<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        return Cities::all();
    }

    public function store(Request $request)
    {
        return Cities::create($request->all());
    }

    public function show($id)
    {
        return Cities::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
        $citie = Cities::findOrFail($id);
        $citie->update($request->all());
        $citie->save();

        return $citie;
    }

    public function destroy(Request $request, $id)
    {
        $citie = Cities::findOrFail($id);
        $citie->delete();
        return 204;
    }
}
