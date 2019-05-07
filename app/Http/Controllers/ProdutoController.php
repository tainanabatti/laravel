<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $total = Produto::all()->count();
        return view('list-produtos', compact('produtos', 'total'));
    }

    public function create(){
        return view('include-produto');
    }

    public function store(Request $request){
        $product = new Produto;
        $product->nome = $request->nome;
        $product->descricao = $request->descri;
        $product->name = $request->name;
        $product->name = $request->name;
        $product->name = $request->name;

    }
}
