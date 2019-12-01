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
  public function salvarModelo (Request $request)
  {
    $data = $request->all();
    $create = App\Modelo_carro::create(
        ['nome' => $data['nome'],
        'marca' => $data['marca'],
        'ano' => $data['ano']]
      );

    if ($create !== null){
      return view('modelos', ['modelos' => App\Modelo_carro::all()]);
    }

  }
}
