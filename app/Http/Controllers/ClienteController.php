<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        $total = Cliente::all()->count();
        return view('list-clientes', compact('clientes', 'total'));
    }

    public function create() {
        return view('include-cliente');
    }

    public function store(Request $request) {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->rua = $request->rua;
        $cliente->complemento = $request->complemento;
        $cliente->bairro = $request->bairro;
        $cliente->cep = $request->cep;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->save();
        return redirect()->route('cliente.index')->with('message', 'Cliente criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $cliente = Cliente::findOrFail($id);
        return view('alter-cliente', compact('cliente'));
    }

    public function update(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->rua = $request->rua;
        $cliente->complemento = $request->complemento;
        $cliente->bairro = $request->bairro;
        $cliente->cep = $request->cep;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->save();
        return redirect()->route('cliente.index')->with('message', 'Cliente alterado com sucesso!');
    }

    public function destroy($id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('message', 'Cliente excluído com sucesso!');
    }
}
