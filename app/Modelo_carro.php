<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo_carro extends Model
{
  protected $table = 'modelo_carro';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
