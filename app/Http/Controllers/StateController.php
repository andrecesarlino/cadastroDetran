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
    public function store(Request $request)
    {
        return State::create($request->all());
    }

    public function show($id)
    {
        return State::find($id);
    }

    public function update(Request $request, State $state)
    {
        $state->update($request->all());
        return $state;
    }

    public function destroy(State $state)
    {
        $state->delete();
        return response()->json(null, 204);

    }
}
