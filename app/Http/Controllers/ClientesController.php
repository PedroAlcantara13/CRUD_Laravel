<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use Illuminate\Support\Facades\Redirect;

class ClientesController extends Controller
{
    public function index()
    {
    	$clientes = clientes::get();
    	return view('clientes.lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
    	return view('clientes.formulario');
    }

    public function salvar(Request $request)
    {
    	$clientes = new clientes();

    	$clientes = $clientes->create($request->all());


    	return Redirect::to('clientes/novo');
    }

     public function editar($id)
    {
    	$cliente = clientes::findOrFail($id);

        return view('clientes.editando', compact('cliente'));
    }

    public function atualizar(Request $req, $id)
    {
        $cliente = $req->all();
      clientes::find($id)->update($cliente);
      return redirect('clientes');



    }
    public function delete($id){

        $cliente = clientes::find($id);
        $cliente->delete();
        return redirect('clientes');

   }



}
