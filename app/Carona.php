<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carona extends Model
{

  protected $table = 'carona';
  protected $primaryKey = 'id';
  protected $fillable =
  [
    'id',
    'id_carro',
    'id_destino',
    'velocidade_media',
    'data',
    'horario_inicio',
    'horario_final'
  ];
  public $timestamps = false;

}
