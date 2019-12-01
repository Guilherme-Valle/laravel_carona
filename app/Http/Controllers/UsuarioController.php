<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class UsuarioController extends Controller
{
  public function index()
  {
    return view('usuarios', ['usuarios' => App\Usuario::all()]);
  }
  public function salvarUsuario(Request $request)
  {
    $data = $request->all();
    $create = App\Usuario::create(
        ['nome' => $data['nome'],
        'cpf' => $data['cpf'],
        'data_de_nascimento' => $data['data_de_nascimento'],
        'avaliacao_motorista' => 0,
        'avaliacao_passageiro' => 0]
      );

    if ($create !== null){
      return view('usuarios', ['usuarios' => App\Usuario::all()]);
    }

  }
}
