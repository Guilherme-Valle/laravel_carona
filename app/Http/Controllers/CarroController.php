<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CarroController extends Controller
{
    public function index()
    {
      return view('carros', ['carros' => App\Carro::all(), 'models' => App\Modelo_carro::all(), 'persons' => App\Usuario::all()]);
    }

    public function salvarCarro(Request $request)
    {
      $data = $request->all();
      $create = App\Carro::create(
          ['modelo_id' => $data['modelo_select'],
          'id_proprietario' => $data['dono_select'],
          'placa' => $data['placa']]
        );

      if ($create !== null){
        return view('carros', ['carros' => App\Carro::all(), 'models' => App\Modelo_carro::all(), 'persons' => App\Usuario::all()]);
      }
    }
}
