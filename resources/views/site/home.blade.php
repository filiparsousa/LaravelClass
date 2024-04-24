@extends('site.layout')

@section('title', 'Home Page')

@section('content')
 
<style>
  body {
    background-image: url('{{ asset('imagens/livros.jpg') }}');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
    background-attachment: local, scroll;
  }

  h1 {
    text-align: center;
    margin-top: 10%;  
    color: #333;
    padding: 2%;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 10px;

    /* Animação */
    animation: fadeInAnimation ease 3s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
  }

  /* Definição da animação */
  @keyframes fadeInAnimation {
    0% {
      opacity: 0;
      transform: translateY(50px); 
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<h1><b>Bem-vindo à Biblioteca!</b></h1>

@endsection