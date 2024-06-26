@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listagem de todos os sócios</div>
                <div class="card-header">Socios registados: {{$socios->total()}}</div>
                <input type="text" id="search" class="form-control" placeholder="Procurar...">

                <div class="card-body">
                
                <style>
                body {
                    background-image: url('{{ asset('imagens/flower.jpg') }}');
                    background-repeat: no-repeat;
                    background-size: 100%; 
                    background-position:center-bottom;
                    }
                </style>

                <table class="table">
            <thead>
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Gestor</th>
                <th scope="col">Nivel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($socios as $socio)
                <tr>
                <th scope="row">{{$socio->id}}</th>
                <td>{{$socio->nome}}</td>
                <td>{{$socio->telefone}}</td>
                <td>{{$socio->user->name}}</td>
                <td>{{$socio->user->level}}</td>
                <td><a href="{{route('socio.show',$socio->id)}}" class="btn btn-outline-primary"> Visualizar </a></td>
                
                </tr>
                @endforeach
                <!-- Ele vai a todos os socios buscar estas informações -->
               
            </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
