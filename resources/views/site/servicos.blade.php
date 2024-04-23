@extends('site.layout')

@section ('title', 'Serviços')

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
        <h3> Página dos Serviços  </h3>

    </div>

    <div class="row">
        <div class="col">
          <div class="card border-light mb-3 mx-auto shadow" style="max-width: 18rem;">
            <div class="card-header" style= "color: rgb(76, 80, 91)" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
              </svg><p><h6><b>Empréstimo de Livros</b></h6></p></div>
            <div class="card-body">
              <p class="card-text">Pegue emprestado uma variedade de livros por um período determinado.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-light mb-3 mx-auto shadow" style="max-width: 18rem;">
            <div class="card-header" style= "color: rgb(76, 80, 91)" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg><p><h6><b>Assistência de Pesquisa</b></h6></p></div>
            <div class="card-body">
              <p class="card-text">Obtenha ajuda na pesquisa de informações, com a ajuda de bibliotecários especializados.</p>
            </div>
          </div>
        </div>
          <div class="col">
          <div class="card border-light mb-3 mx-auto shadow" style="max-width: 18rem;">
            <div class="card-header" style= "color: rgb(76, 80, 91)" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
              </svg><p><h6><b>Acesso a Computadores</b></h6></p></div>
            <div class="card-body">
              <h5 class="card-title"> </h5>
              <p class="card-text">Utilize computadores e Wi-Fi gratuitos, com serviços adicionais de impressão e digitalização.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card border-light mb-3 mx-auto shadow" style="max-width: 18rem;">
            <div class="card-header" style= "color: rgb(76, 80, 91)" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
                <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0z"/>
              </svg><p><h6><b>Programas Educacionais</b></h6></p></div>
            <div class="card-body">
              <p class="card-text">Participe em programas de leitura e workshops educativos para todas as idades.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-light mb-3 mx-auto shadow" style="max-width: 18rem;">
            <div class="card-header" style= "color: rgb(76, 80, 91)" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
              </svg><p><h6><b>Espaços para Estudo e Reuniões</b></h6></p></div>
            <div class="card-body">
              <p class="card-text">Aproveite áreas tranquilas para estudo solo ou reserve salas para trabalho em grupo.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-light mb-3 mx-auto shadow" style="max-width: 18rem;">
            <div class="card-header" style= "color: rgb(76, 80, 91)" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video3" viewBox="0 0 16 16">
                <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2"/>
                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783Q16 12.312 16 12V4a2 2 0 0 0-2-2z"/>
              </svg> <p><h6><b>Eventos Culturais</b></h6></p></div>
            <div class="card-body">
              <p class="card-text">Desfrute de leituras de autores, clubes de livros e exposições culturais.</p>
            </div>
          </div>
        </div>
      </div>
      

@endsection