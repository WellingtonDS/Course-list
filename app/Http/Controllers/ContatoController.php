<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index() 
    {
        $contatos = [
           (object) ["nome" => "Maria", "tel"=>"11959175117" ],
           (object) ["nome" => "Pedro", "tel"=>"11959175889" ]
        ];

        $contato = new Contato();
        dd($contato->lista());
        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req) 
    {
        dd($req);
        return "Este é o index do controller contato";
    }
    public function editar() 
    {
        return "Este é o index do controller contato";
    }
}
