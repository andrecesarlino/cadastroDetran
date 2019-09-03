<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['nome','cpfcnpj','endereco','telefone','celular','id_city'];
}
