<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CidadeController extends Controller
{
  public function index()
  {
    return view('cidades', ['cidades' => App\Cidade::all(),
                            'estados' => App\Estado::all()]);
  }
  public function salvarCidade (Request $request)
  {
    $data = $request->all();
    $create = App\Cidade::create(
        ['nome' => $data['nome'],
        'id_estado' => $data['estado_select']]
      );

    if ($create !== null){
      return view('cidades', ['cidades' => App\Cidade::all(),
                              'estados' => App\Estado::all()]);
    }

  }
}
