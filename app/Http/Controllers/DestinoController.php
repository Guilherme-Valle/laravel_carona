<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class DestinoController extends Controller
{
  public function index()
  {
    return view('destinos', ['destinos' => App\Destino::all()]);
  }
}
