<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['id_peoples','modelo', 'marca','placa','tipo'];
}
