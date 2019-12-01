<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidade';
    protected $primaryKey = 'id';
    protected $fillable = [
      'id',
      'id_estado',
      'nome'
    ];
    public $timestamps = false;
}
