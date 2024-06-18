<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //nao é necessario definir as variaveis que representam  os parametros do metodo  com o msm nome das variaveis  recebidas nas rotas
    //o importante é a sequencia dos parametros reecebidos

 public function teste(int $p1,int $p2){
        $soma = ($p1 + $p2);
       // return view('site.teste', ['x' => $p1,'y' => $p2, 'soma' => $soma ]); //array assosiativo

       //return view('site.teste', compact('p1', 'p2', 'soma')); //metodo compact

       return view('site.teste')->with('p1', $p1)->with('p2', $p2)->with('soma', $soma);
    
 }
}
