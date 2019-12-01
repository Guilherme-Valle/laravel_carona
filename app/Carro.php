<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carro';
    protected $primaryKey = 'id';
    protected $fillable =
    [
      'id',
      'modelo_id',
      'id_proprietario',
      'placa'
    ];
    public $timestamps = false;
}
