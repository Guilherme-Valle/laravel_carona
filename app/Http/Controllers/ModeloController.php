<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ModeloController extends Controller
{
  public function index()
  {
    return view('modelos', ['modelos' => App\Modelo_carro::all()]);
  }
}
