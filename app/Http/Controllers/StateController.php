<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;


class StateController extends Controller
{
    public function index()
    {
        return State::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return State::create($request->all());
    }

    public function show($id)
    {
        return State::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
//        $state = State::findOrFail($id);
//        $state->update($request->all());
//        return $state;

        $state = State::findOrFail($id);
        $state->update($request->all());
        $state->save();

        return $state;
    }

    public function destroy(Request $request, $id)
    {
        $states = State::findOrFail($id);
        $states->delete();
        return 204;
    }
}
