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
}
