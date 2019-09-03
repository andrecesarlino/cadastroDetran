<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['id_people','modelo', 'marca','placa','tipo'];
}
