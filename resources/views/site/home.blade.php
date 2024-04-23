@extends('site.layout')

@section ('title', 'Home Page do meu site')


{{-- define o início da seção de conteúdo --}}
@section('content')
 
<style>
  body {
    background-image: url('{{ asset('imagens/livros.jpg') }}');
    background-repeat: no-repeat;
    background-size:100%; 
    background-position: center;
    background-attachment: local, scroll;
  }

  h1{
    text-align: center;
    margin-top: 20%;
    color: #333;
    margin-top: 10%;
    padding: 2%;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 10px;
  }
</style>

<h1><b>Bem-vindo à Biblioteca !</b></h1>


@endsection
{{-- final da seção de conteúdo. --}}
