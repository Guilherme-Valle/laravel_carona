<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CaronaController extends Controller
{
  public function index(){
    return view('caronas', ['caronas' => App\Carona::all()]);
    
  }
}
