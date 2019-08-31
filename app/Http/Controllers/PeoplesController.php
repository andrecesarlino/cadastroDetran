<?php

namespace App\Http\Controllers;

use App\Peoples;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    public function index()
    {
        return Peoples::all();
    }

    public function store(Request $request)
    {
        return Peoples::create($request->all());
    }

    public function show($id)
    {
        return Peoples::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
        $citie = Peoples::findOrFail($id);
        $citie->update($request->all());
        $citie->save();
        return $citie;
    }

    public function destroy(Request $request, $id)
    {
        $citie = Peoples::findOrFail($id);
        $citie->delete();
        return 204;
    }
}
