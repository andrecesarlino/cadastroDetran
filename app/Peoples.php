<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peoples extends Model
{
    protected $fillable = ['nome','cpfcnpj','endereco','telefone','celular'];
}
