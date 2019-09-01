<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $fillable = ['id_vehicle','valor', 'prazo','status'];
}
