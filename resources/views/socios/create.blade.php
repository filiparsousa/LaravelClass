@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar Socios</div>

                    @if(session('msg'))
                        <p class="btn btn-secondary">
                        {{session('msg')}}
                        </p>
                     @endif
                    <!-- este "if" vai permitir aparecer uma mensagem de sucesso sempre que for subsmetido o registo com sucesso 
                   mensagem escrita no sociocontroller-->


                   <p class="btn btn-outline-primary"><a href="{{route('socio.index')}}">Listar todos os sócios </a></p>
                   <!-- a rota definida apresenta a pagina com todos os socios -->
                   <!-- como a rota já esta  criada, é só criar uma view-layouts-socios, uma pasta de index.blade.php -->
             
                   <!-- o can('level') restringe o acesso só aos cargos (ex: administrador ve todos os socios, o utilizador só ve os dele -->
                   <p class="btn btn-outline-primary"><a href="{{route('socios.user', Auth::user()->id)}}">Lista dos meus sócios</a></p>
         
                
                <div class="card-body">
                <style>
                body {
                    background-image: url('{{ asset('imagens/flower.jpg') }}');
                    background-repeat: no-repeat;
                    background-size: 100%; 
                    background-position:center-bottom;
                    }
                </style>

                <form action="{{route('socio.store')}}" method="post">
                    <!-- adicionar a routa  -->

                 @csrf  
                    <!-- para questoes de segurança  -->
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
                        <input class="form-control mb-2" type="text" name="nome" id="nome" 
                        required autofocus>
                        <!-- "required" não permite que o campo fique vazio. É obrigatorio o preenchimento-->
                        <!-- "autofocus" faz com que o cursor já esteja dentro do campo de preenchimento, sem necessitar de clicar la -->
                    </div>
                    <div>
                        <label for="morada">Morada</label>
                        <input class="form-control mb-2" type="text" name="morada" id="morada" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="CC">Cartão de Cidadão</label>
                        <input class="form-control mb-2" type="text" name="CC" id="CC" 
                        required autofocus>
                    <div>
                        <label for="codPostal">Código Postal</label>
                        <input class="form-control mb-2" type="text" name="cod_postal" id="cod_postal" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="localidade">Localidade</label>
                        <input class="form-control mb-2" type="text" name="localidade" id="localidade" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input class="form-control mb-2" type="text" name="telefone" id="telefone" 
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
