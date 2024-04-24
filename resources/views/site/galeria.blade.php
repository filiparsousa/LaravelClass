@extends('site.layout')

@section('title', 'Galeria')

<style>
  body {
    background-image: url('{{ asset('imagens/wall.jpg') }}');
    background-repeat: no-repeat;
    background-size: cover; /* Ajuste para melhor cobertura e visualização */
    background-position: center;
    background-attachment: fixed; /* Fixa o fundo durante o scroll */
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

  .gallery-container {
    margin-top: 50px;
    padding: 0 30px; 
  }

  .card {
    transition: transform .2s; 
    box-shadow: 0 6px 10px rgba(0,0,0,0.1);
  }

  .card:hover {
    transform: scale(1.05); 
    box-shadow: 0 12px 20px rgba(0,0,0,0.2); 
  }

  .card-img-top {
    height: 250px; 
    object-fit: cover; 
  }

  .card-body h5 {
    color: #007bff; 
  }
</style>

@section('content')
    
    <h3>Página da Galeria</h3>

    <div class="gallery-container"> 
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="{{ asset('imagens/stock.jpg') }}" class="card-img-top" alt="Books & Reading">
            <div class="card-body">
              <h5 class="card-title">Books & Reading</h5>
              <p class="card-text">Galerias dos espaços reservados a leitura</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{ asset('imagens/white.png') }}" class="card-img-top" alt="Relax and Chill">
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
            <img src="{{ asset('imagens/livro.png') }}" class="card-img-top" alt="Books & Coffee">
            <div class="card-body">
              <h5 class="card-title">Books & Coffee</h5>
              <p class="card-text">Galeria da zona de bar da biblioteca</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
