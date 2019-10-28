<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CarroController extends Controller
{
    public function index()
    {
      return view('carros', ['carros' => App\Carro::all()]);
    }
}
