<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index()
    {
        return Person::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return Person::create($request->all());
    }

    public function show($id)
    {
        return Person::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return $person;
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json(null, 204);

    }
}
