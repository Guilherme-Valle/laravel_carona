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
}
