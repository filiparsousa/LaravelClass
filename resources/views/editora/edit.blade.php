@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar a Editora</div>

                <div class="card-body">
               
               <style>
                        body {background-color:lightslategray;}
                </style>

                <form action="{{route('editora.update', $editora->id)}}" method="post">
                    <!-- adicionar a routa  -->
                    @method('put')
                    @csrf  
                    
                    <fieldset>
                    <!-- Espaço para os campos par adicionar informações -->
                    <legend style=color:black>Preencha todos os campos</legend>
                    <!-- É como se fosse um H1  -->
                    <div>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                      
                    </div>
                    <div>
                        <label for="nome">Nome</label>
                        <input class="form-control mb-2" type="text" name="nome" id="nome" value="{{ old('nome', $editora->nome) }}" required autofocus>
                       
                    </div>
                    <div>
                        <label for="morada">Morada</label>
                        <input class="form-control mb-2" type="text" name="morada" id="morada" value="{{ old('morada', $editora->morada) }}"
                        required autofocus>
                    </div>
                    <div>
                        <label for="cod_postal">Código Postal</label>
                        <input class="form-control mb-2" type="text" name="cod_postal" id="cod_postal" value="{{ old('cod_postal', $editora->cod_postal) }}"
                        required autofocus>
                    </div>
                   
                    <div>
                        <label for="telefone">Telefone</label>
                        <input class="form-control mb-2" type="text" name="telefone" id="telefone" value="{{ old('telefone', $socio->telefone)}}"
                        required autofocus>
                    </div>
                    <div>
                        <label for="contribuinte">Contribuinte</label>
                        <input class="form-control mb-2" type="text" name="contribuinte" id="contribuinte" value="{{ old('contribuinte', $editora->contribuinte) }}"
                        required autofocus>
                    </div>
                 
                    
                    <!-- Acrescentar botoes para gravar ou limpar -->
                    <div>
                    <button type="submit" class="btn btn-primary" value="gravar">Gravar</button>
                    </div>


                    </fieldset>

                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection