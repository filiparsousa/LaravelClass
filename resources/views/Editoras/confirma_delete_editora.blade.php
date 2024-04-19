@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmar Eliminação da Editora') }}</div>
               
            <style>
            body {
                background-image: url('{{ asset('imagens/flower.jpg') }}');
                background-repeat: no-repeat;
                background-size: 100%; 
                background-position:center-bottom;
                }
            </style>
            
                <div class="card-body">
                 
                <p>Confirma a Eliminação desta editora <strong>{{$id->nome}}</strong>?</p>
                <p><strong>Atenção: a editora vai ser eliminada definitivamente</strong></p>

                
                <form action="{{route('editora.destroy', $id -> id)}}" method="post">
                    @csrf
                    @method('delete')
                
                
                <button type="submit">Eliminar Definitivamente </button>

                <a href="{{route('editora.show', $id->id)}}"> Voltar</a>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection