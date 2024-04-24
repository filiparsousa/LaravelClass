<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ route('site.home') }}">Home</a>
        <a class="nav-link" href="{{ route('site.contacto') }}">Contacto</a>
        <a class="nav-link" href="{{ route('site.galeria') }}">Galeria</a>
        <a class="nav-link" href="{{ route('site.servicos') }}">Serviços</a>
      </div>
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="{{ route('home') }}">Login/Registo</a>
      </div>
    </div>
  </div>
</nav>

<style>
  .navbar {
    background-color: #f8f9fa; 
    box-shadow: 0 4px 9px rgba(0, 0, 0, 0.1); 
  }

  .nav-link {
    margin-right: 15px;
    color: #51585f; 
  }

  .nav-link:hover {
    color: #007bff; 
  }

  .nav-link.active {
    color: #0d6efd; 
    font-weight: bold; 
  }

</style>