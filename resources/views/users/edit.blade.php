@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edição do utilizador {{$user->name}}</div>

                <div class="card-body">
                
                <style>
                body {
                    background-image: url('{{ asset('imagens/flower.jpg') }}');
                    background-repeat: no-repeat;
                    background-size: 100%; 
                    background-position:center-bottom;
                    }
                </style>
                                                 
                <!-- apos a pessoa selecionar o botão editar, vai aparecer o segunte formulario (retirado do bootstrap) -->
                <form action="{{route('user.update', $user->id)}}" method="post"> 

                @csrf
                <!-- este codigo é sempre utilizado para garantir a segurança do formulario-->
                @method('PUT')
                <!-- só utilizamos para garantir a segurança do formulario quando EDITAMOS -->


                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"value="{{$user->email}}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="Password" class="form-control" id="password" name="password" value="{{$user->password}}">
                   
                <!-- criado uma box com opções -->
                <select name="level">
                    <option value=""selected disabled>Selecione uma das opções 
                    <!--"selected disabled" permite que esta opção nao seja escolhida  -->
                    <option value="admin" >Administrador</option>    
                    <option value="utilizador" >Utilizador</option>
                </select>
                </div>

                <button type="submit" class="btn btn-primary">Gravar</button>
                
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
