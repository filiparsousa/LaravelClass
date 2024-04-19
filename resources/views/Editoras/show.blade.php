@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ficha da Editora <strong>{{$editora->nome}}</strong><a href="{{route('editora.index')}}"></div>
 
            <style>
            body {
                background-image: url('{{ asset('imagens/flower.jpg') }}');
                background-repeat: no-repeat;
                background-size: 100%; 
                background-position:center-bottom;
                }
            </style>

 <div class="card-body">

<table class="table editora-table">
        <tbody>
        <tr>
                <td>ID</td>
                <td>{{ $editora->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $editora->nome }}</td>
            </tr>
             <tr>
                <td>Morada</td>
                <td>{{ $editora->morada }}</td>
            </tr>

            <tr>
                <td>Telefone</td>
                <td>{{ $editora->telefone}}</td>
            </tr>
            <tr>
                <td>Contribuinte</td>
                <td>{{ $editora->contribuinte}}</td>
            </tr>
            </tbody>
    </table>
            <a href= "{{route('editora.index')}}" class="btn btn-primary"> Voltar </a>    
            <a href="{{route('editora.edit',$editora->id)}}" class="btn btn-primary"> Editar </a>
            <a href="{{route('editora.confirma_delete_editora',$editora->id)}}" class="btn btn-primary"> Apagar </a>
            </tbody>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
