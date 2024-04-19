<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    // é utilizado para mostrar uma lista de editoras
    public function index()
    {
        return view('editoras.index', ['editoras' => Editora::orderby('nome')->paginate(20)]);
    }

    //mostra um formulário para criar uma nova editora.
    public function create()
    {
        return view('editoras.create');
    }

    //guarda uma nova editora na base de dados.
    public function store(Request $request)
    {
        $editora=new Editora();
        //cada campo do formulario vai corresponder a cada campo da tabela 
        //colocar pela mesma sequência da tabela 
         $editora->id           =$request->id;
         $editora->nome         =$request->nome;
         $editora->morada       =$request->morada;    
         $editora->telefone     =$request->telefone;
         $editora->contribuinte  =$request->contribuinte;

         $editora->save();
        //  comando que vai gravar a instrução dada para gravar 

         return redirect()->route('editora.create')->with('msg','O resgisto foi gravado com sucesso') ;
    }

   // mostra uma editora específica.
    public function show(Editora $editora)
    {
        return view ('editoras.show', ['editora'=>$editora]) ;
    }

    // mostra um formulário para editar uma editora específica.
    public function edit(Editora $editora)
    {
        return view ('editoras.edit',['editora'=>$editora]);
    }

    //atualiza uma editora existente na base de dados.
    public function update(Request $request, Editora $editora)
    {
        Editora::findOrFail($editora->id)->update($request->all());
        return redirect()->route('editora.show', $editora->id);
    }

    // remove uma editora da base de dados.
    public function destroy(Editora $editora)
    {
        //return 'Foi eliminado o sócio '.$socio->nome;
        Editora::findOrFail($editora->id)->delete();
        return redirect()->route('editora.index'); 
    }

    public function confirma_delete_editora (Editora $id)
    {   
        return view('editoras.confirma_delete_editora', ['id' => $id]);
    }
}
