<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    // é utilizado para mostrar uma lista de editoras
    public function index()
    {
        return view('editora.index', ['editora' => Editora::orderby('nome')->paginate(10)]);
    }

    //mostra um formulário para criar uma nova editora.
    public function create()
    {
        return view('editora.create');
    }

    //guarda uma nova editora na base de dados.
    public function store(Request $request)
    {
        $editora=new Editora();
        //cada campo do formulario vai corresponder a cada campo da tabela 
        //colocar pela mesma sequência da tabela 
        $editora->user_id     =$request->user_id;
         $editora->nome       =$request->nome;
         $editora->CC         =$request->CC;
         $editora->morada     =$request->morada;
         $editora->cod_postal =$request->cod_postal;
         $editora->localidade =$request->localidade;
         $editora->telefone   =$request->telefone;

         $editora->save();
        //  comando que vai gravar a instrução dada para gravar 

         return redirect()->route('editora.create')->with('msg','O resgisto foi gravado com sucesso') ;
    }

   // mostra uma editora específica.
    public function show(Editora $editora)
    {
        return view ('editora.show', ['editora'=>$editora]) ;
    }

    // mostra um formulário para editar uma editora específica.
    public function edit($id)
    {
        return view ('socios.edit',['socio'=>Editora::find($id)]);
    }

    //atualiza uma editora existente na base de dados.
    public function update(Request $request, Editora $editora)
    {
        Editora::findOrFail($editora->id)->update($request->all());
        return redirect()->route('socio.index', $editora->id);
    }

    // remove uma editora da base de dados.
    public function destroy(Editora $editora)
    {
        //return 'Foi eliminado o sócio '.$socio->nome;
        Editora::findOrFail($editora->id)->delete();
        return redirect()->route('socio.index');
        
    }
}
