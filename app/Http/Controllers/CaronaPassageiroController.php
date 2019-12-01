<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CaronaPassageiroController extends Controller

{
  public function index(){
    return view('caronapassageiros', ['caronapassageiros' => App\CaronaPassageiro::all(),
     'caronas' => App\Carona::all(), 'passageiros' => App\Usuario::all()]);
  }

  public function salvarCaronaPas(Request $request)
  {
    $data = $request->all();
    $create = App\CaronaPassageiro::create(
        ['id_carona' => $data['carona_select'],
        'id_passageiro' => $data['passageiro_select'],
        'avaliacao_motorista' => $data['avaliacao_motorista'],
        'avaliacao_passageiro' => $data['avaliacao_motorista'],
        'comentario_motorista' => $data['comentario_motorista'],
        'comentario_passageiro' => $data['comentario_passageiro']]
      );

    if ($create !== null){
      return view('caronapassageiros', ['caronapassageiros' => App\CaronaPassageiro::all(),
       'caronas' => App\Carona::all(), 'passageiros' => App\Usuario::all()]);
     }
  }
}
