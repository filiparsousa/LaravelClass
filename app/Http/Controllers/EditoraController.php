<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    // é utilizado para mostrar uma lista de editoras
    public function index()
    {
       
    }

    //mostra um formulário para criar uma nova editora.
    public function create()
    {
        
    }

    //guarda uma nova editora na base de dados.
    public function store(Request $request)
    {
        //
    }

   // mostra uma editora específica.
    public function show(Editora $editora)
    {
        //
    }

    // mostra um formulário para editar uma editora específica.
    public function edit(Editora $editora)
    {
        //
    }

    //atualiza uma editora existente na base de dados.
    public function update(Request $request, Editora $editora)
    {
        //
    }

    // remove uma editora da base de dados.
    public function destroy(Editora $editora)
    {
        //
    }
}
