@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar o Sócio</div>

                <div class="card-body">
               
                <style>
                body {
                    background-image: url('{{ asset('imagens/flower.jpg') }}');
                    background-repeat: no-repeat;
                    background-size: 100%; 
                    background-position:center-bottom;
                    }
                </style>

                <form action="{{route('socio.update', $socio->id)}}" method="post">
                    <!-- adicionar a routa  -->
                    @method('put')
                    @csrf  
                    
                    <fieldset>
                    <!-- Espaço para os campos par adicionar informações -->
                    <legend style=color:black>Preencha todos os campos</legend>
                    <!-- É como se fosse um H1  -->
                    <div>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <!-- o "value="{{Auth::user()->id}}"" aqui vai permitir que seja apresentado o codigo do user neste preenchimento. É algo automático e não é colocado manualmente -->
                        <!-- "type="hiddgen"" permite esconder o preenchimento, ou seja, o comando todo continua a funcionar mas fica escondido -->
                    </div>
                    <div>
                        <label for="nome">Nome</label>
                        <input class="form-control mb-2" type="text" name="nome" id="nome" value="{{ old('nome', $socio->nome) }}" required autofocus>
                        <!-- "required" não permite que o campo fique vazio. É obrigatorio o preenchimento-->
                        <!-- "autofocus" faz com que o cursor já esteja dentro do campo de preenchimento, sem necessitar de clicar la -->
                    </div>
                    <div>
                        <label for="morada">Morada</label>
                        <input class="form-control mb-2" type="text" name="morada" id="morada" value="{{ old('morada', $socio->morada) }}"
                        required autofocus>
                    </div>
                    <div>
                        <label for="CC">Cartão de Cidadão</label>
                        <input class="form-control mb-2" type="text" name="CC" id="CC" value="{{ old('CC', $socio->CC) }}"
                        required autofocus>
                    <div>
                        <label for="cod_postal">Código Postal</label>
                        <input class="form-control mb-2" type="text" name="cod_postal" id="cod_postal" value="{{ old('cod_postal', $socio->cod_postal) }}"
                        required autofocus>
                    </div>
                    <div>
                        <label for="localidade">Localidade</label>
                        <input class="form-control mb-2" type="text" name="localidade" id="localidade" value="{{ old('localidade', $socio->localidade) }}"
                        required autofocus>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input class="form-control mb-2" type="text" name="telefone" id="telefone" value="{{ old('telefone', $socio->telefone)}}"
                        required autofocus>
                    </div>
                    <!-- "class="form-control mb-2" este comando permite dar espaço entre as linhas -->
                 
                    
                    <!-- Acrescentar botoes para gravar ou limpar -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary me-md-2" value="gravar">Gravar</button>
                    <button type="reset" class="btn btn-primary me-md-2" value="limpar">Limpar</button>
                    </div>


                    </fieldset>

                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection