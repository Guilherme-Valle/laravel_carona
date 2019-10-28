<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class CaronaPassageiroController extends Controller

{
  public function index(){
    return view('caronapassageiros', ['caronapassageiros' => App\CaronaPassageiro::all()]);
  }
}
