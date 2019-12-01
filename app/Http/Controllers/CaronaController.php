<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CaronaController extends Controller
{
  public function index(){
    return view('caronas', ['caronas' => App\Carona::all(),
                            'carros' => App\Carro::all(),
                            'destinos' => App\Destino::all()]);

  }

  public function salvarCarona(Request $request)
    {
      $data = $request->all();
      $create = App\Carona::create(
          ['id_carro' => $data['carro_select'],
          'id_destino' => $data['destino_select'],
          'velocidade_media' => $data['velocidade_media'],
          'data' => $data['data'],
          'horario_inicio' => $data['horario_inicio'],
          'horario_final' => $data['horario_final']]
        );

      if ($create !== null){
        return view('caronas', ['caronas' => App\Carona::all(),
                                'carros' => App\Carro::all(),
                                'destinos' => App\Destino::all()]);
       }
    }
}
