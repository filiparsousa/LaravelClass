<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\User;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function socios_user(User $id)
    {   $user=User::where('id', $id->id)->first();
        $socios=$user->socios()->get();
        return view('socios.socios_user', [
            'socios'=>$socios
        ]);
    }
    
    public function index()
    {
        return view('socios.index', ['socios' => Socio::orderby('nome')->paginate(10)]);
        // "paginate(10)" vai permitir a visualização de 10 pessoas na lista 
    }

  
    public function create()
    {
        return view('socios.create');
    }

   
    public function store(Request $request)
    {
        // Model socios
        $socio=new Socio();
        //cada campo do formulario vai corresponder a cada campo da tabela 
        //colocar pela mesma sequência da tabela 
        $socio->user_id     =$request->user_id;
         $socio->nome       =$request->nome;
         $socio->CC         =$request->CC;
         $socio->morada     =$request->morada;
         $socio->cod_postal =$request->cod_postal;
         $socio->localidade =$request->localidade;
         $socio->telefone   =$request->telefone;

         $socio->save();
        //  comando que vai gravar a instrução dada para gravar 

         return redirect()->route('socio.create')->with('msg','O resgisto foi gravado com sucesso') ;
        //  variave de sessão que vai indicar uma mensagem quando foi submetida a operação com sucesso
    }

    
    public function show(Socio $socio)
    {
        return view ('socios.show', [
            'socio'=>$socio
            ]) ;
    }

   
    public function edit($id)
    {
        //return 'Edição do sócio'. $id->name ( vai abrir uma pagina teste para ver se a ligação está a ser feita)

        return view ('socios.edit',['socio'=>Socio::find($id)]);
    }

   
    public function update(Request $request, Socio $socio)
    {  
        //return 'Edição do sócio'. $socio->name;
        Socio::findOrFail($socio->id)->update($request->all());
        return redirect()->route('socio.index', $socio->id);
    }

    
    public function destroy(Socio $socio) 
    {
        {
        //return 'Foi eliminado o sócio '.$socio->nome;
        Socio::findOrFail($socio->id)->delete();
        return redirect()->route('socio.index');
        }
    }

    // função que vai questionar se quer mesmo eliminar o registo
    public function confirma_delete(Socio $id) 
    {
        return view('socios.confirma_delete', ['id'=>$id]);
    }



}
