<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaronaPassageiro extends Model
{
  protected $table = 'carona_passageiro';
  protected $primaryKey = 'id';
  protected $fillable =
  [
    'id_carona',
    'id_passageiro',
    'avaliacao_motorista',
    'avaliacao_passageiro',
    'comentario_motorista',
    'comentario_passageiro'
  ];
  public $timestamps = false;
}
