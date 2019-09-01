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
}
