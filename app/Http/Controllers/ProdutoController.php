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
        $product->descricao = $request->descricao;
        $product->preco = $request->preco;
        $product->save();

        return redirect()->route('product.index')->with('message', 'Produto criado com sucesso');

    }

    public function show($id){
        //
    }

    public function edit($id){
        $product =Produto::findOrFail($id);
        return view('alter-produto', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Produto::findOrFail($id);
        $product->nome = $request->nome;
        $product->descricao = $request->descricao;
        $product->preco = $request->preco;
        $product->save();

        return redirect()->route('product.index')->with('message', 'Produto alterado com sucesso');
    }

    public function destroy($id){
        $product = Produto::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Produto excluido com sucesso');

    }


}
