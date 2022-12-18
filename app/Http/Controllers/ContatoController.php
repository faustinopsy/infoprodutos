<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $data['titulo'] = "minha página de contato.";
        return view('contato',$data);
    }
}
