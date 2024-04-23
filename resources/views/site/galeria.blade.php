@extends('site.layout')

@section ('title', 'Galeria')

<style>
  body {
    background-image: url('{{ asset('imagens/wall.jpg') }}');
    background-repeat: no-repeat;
    background-size:100%; 
    background-position: center;
    background-attachment: local, scroll;
  }

  h3{
    text-align: center;
    margin-top: 20%;
    color: #333;
    margin-top: 10%;
    padding: 2%;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 10px;
  }
</style>

{{-- define o início da seção de conteúdo --}}
@section('content')
 
    
    <div class="row">
        <h3> Página da Galeria </h3>

    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="imagens/stock.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Books & Reading </h5>
              <p class="card-text"> Galerias dos espaços reservados a leitura </p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="imagens/white.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Relax and Chill</h5>
              <p class="card-text">Galeria dos espaços da biblioteca</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="imagens/livro.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Books & Coffe</h5>
              <p class="card-text"> Galeria da zona de bar da biblioteca</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>

@endsection