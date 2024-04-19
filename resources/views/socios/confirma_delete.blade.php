@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmar Eliminação do Sócio') }}</div>

                <style>
            body {
                background-image: url('{{ asset('imagens/flower.jpg') }}');
                background-repeat: no-repeat;
                background-size: 100%; 
                background-position:center-bottom;
                }
            </style>

                <div class="card-body">
                 
                <p>Confirma a Eliminação deste sócio <strong>{{$id->nome}}</strong>?</p>
                <p><strong>Atenção: o sócio vai ser eliminado definitivamente</strong></p>

                
                <form action="{{route('socio.destroy', $id -> id)}}" method="post">
                    @csrf
                    @method('delete')
                
                
                <button type="submit">Eliminar Definitivamente </button>

                <a href="{{route('socio.show', $id->id)}}"> Voltar</a>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
