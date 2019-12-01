<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class DestinoController extends Controller
{
  public function index()
  {
    return view('destinos', ['destinos' => App\Destino::all()])->with('data', App\Cidade::all());
  }

  public function salvarDestino (Request $request, $id = null)
  {
    $data = $request->all();
    $create = App\Destino::create(
        ['endereco' => $data['address'],
        'id_cidade' => $data['citySelect'],
        'cep' => $data['cep'],
        'numero' => $data['number']]
      );

    if ($create !== null){
      return view('destinos', ['destinos' => App\Destino::all()])->with('data', App\Cidade::all());
    }

  }
}
