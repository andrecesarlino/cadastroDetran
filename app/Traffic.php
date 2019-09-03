<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $fillable = ['valor', 'prazo','status','id_vehicle'];
    protected $table = 'traffics';

}
