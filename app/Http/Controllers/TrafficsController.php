<?php

namespace App\Http\Controllers;

use App\Traffic;
use Illuminate\Http\Request;

class TrafficsController extends Controller
{
    public function index()
    {
        return Traffic::all();
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

    public function update(Request $request, $id)
    {
        
        $traffic = Traffic::findOrFail($id);
        $traffic->update($request->all());
        $traffic->save();
        return $traffic;
    }

    public function destroy(Request $request, $id)
    {
        $traffic = Traffic::findOrFail($id);
        $traffic->delete();
        return 204;
    }
}
