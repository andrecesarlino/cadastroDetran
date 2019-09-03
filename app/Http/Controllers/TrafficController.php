<?php

namespace App\Http\Controllers;
use App\Traffic;
use Illuminate\Http\Request;

class TrafficController extends Controller
{
    public function index()
    {
        return Traffic::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Traffic::create($request->all());
    }

    public function show($id)
    {
        return Traffic::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Traffic $traffic)
    {
        $traffic->update($request->all());
        return $traffic;
    }

    public function destroy(Traffic $traffic)
    {
        $traffic->delete();
        return response()->json(null, 204);

    }
}
