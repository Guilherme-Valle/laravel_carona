<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class EstadoController extends Controller
{
  public function index()
  {
    return view('estados', ['estados' => App\Estado::all()]);
  }
  public function salvarEstado (Request $request)
  {
    $data = $request->all();
    $create = App\Estado::create(
        ['nome' => $data['nome']]
      );

    if ($create !== null){
      return view('estados', ['estados' => App\Estado::all()]);
    }

  }
}
