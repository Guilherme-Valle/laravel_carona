<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CidadeController extends Controller
{
  public function index()
  {
    return view('cidades', ['cidades' => App\Cidade::all()]);
  }
}
