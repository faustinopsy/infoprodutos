<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
   public function index(){
    $produtos = Produto::all();
    return view('produtos.index',array('produtos'=>$produtos));
   }
   public function show($id){
    $produto = Produto::find($id);
    return view('produtos.show',array('produto'=>$produto));
   }
}
