<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
  protected $table = 'destino';
  protected $primaryKey = 'id';
  protected $fillable =
  [
    'endereco',
    'id',
    'cep',
    'id_cidade',
    'numero'
  ];
  public $timestamps = false;
}
