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
                
            <style>
            body {
                background-image: url('{{ asset('imagens/flower.jpg') }}');
                background-repeat: no-repeat;
                background-size: 100%; 
                background-position:center-bottom;
                }
            </style>
                
                <div class="card-header"><b>Lista de todas as Editoras</b><a href="{{route('editora.create')}}" ></div>
                <div class="card-header">Editoras registadas: {{$editoras->total()}}</div>
                <input type="text" id="search" class="form-control" placeholder="Procurar...">

                <div class="card-body">         

                <table class="table">

            <thead>
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editoras as $editora)
                <tr>
                <th scope="row">{{$editora->id}}</th>
                <td>{{$editora->nome}}</td>
                <td>{{$editora->telefone}}</td>
                <td><a href="{{route('editora.show',$editora->id)}}" class="btn btn-outline-primary"> Visualizar </a></td>
                
                </tr>
                @endforeach
                
            </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
