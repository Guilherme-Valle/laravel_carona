<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaronaPassageiro extends Model
{
  protected $table = 'carona_passageiro';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
