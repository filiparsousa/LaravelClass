@extends('site.layout')

@section ('title', 'Contactos')

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
        <h3> Página dos contactos  </h3>

    </div>

    <div class="container my-5">
        <div class="row">
          <!-- Informações de contato -->
          <div class="col-md-6">
            <h2>Entre em Contato</h2>
            <p>Caso tenha alguma dúvida ou sugestão, entre em contato conosco através:</p>
            <ul class="list-unstyled">
              <li><strong>Telefone:</strong> (253) 123456</li>
              <li><strong>Email:</strong> geral@biblioteca.com</li>
              <li><strong>Endereço:</strong> Rua Cesae Digital, 123 - Braga, Portugal</li>
            </ul>
          </div>
      
          <!-- Formulário de contato -->
          <div class="col-md-6">
            <h2>Preencha </h2>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Mensagem</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
          </div>
        </div>
      </div>

@endsection
