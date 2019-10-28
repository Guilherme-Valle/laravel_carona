<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carro';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
