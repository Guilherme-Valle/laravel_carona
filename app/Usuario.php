<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = 'usuario';
  protected $primaryKey = 'id';
  protected $fillable = [
    'id',
    'cpf',
    'nome',
    'data_de_nascimento',
    'avaliacao_motorista',
    'avaliacao_passageiro'
  ];
  public $timestamps = false;
}
