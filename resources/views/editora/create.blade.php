@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style= background-color:lightslategray;>Criar Editoras</div>
             
                @if (session('msg'))
                        <p class="btn btn-info">
                            {{
                                session('msg')
                            }}
                            </p>
                        @endif

                <p class="btn btn-outline-primary"><a href="">Lista de todas as Editoras </a></p> 


                <div class="card-body">
                <form action="{{route('editora.store')}}" method="post">
                @csrf  
                
                <fieldset>
           
                    <div>
                        <input class="form-control mb-2" type="hidden" name="editora_id" id="editora_id">
                    </div>
                    <div>
                        <label for="nome">Nome</label>
                        <input class="form-control mb-2" type="text" name="nome" id="nome" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="morada">Morada</label>
                        <input class="form-control mb-2" type="text" name="morada" id="morada" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="codPostal">Código Postal</label>
                        <input class="form-control mb-2" type="text" name="cod_postal" id="cod_postal" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input class="form-control mb-2" type="text" name="telefone" id="telefone" 
                        required autofocus>
                    </div>
                    <div>
                        <label for="contribuinte">Contribuinte</label>
                        <input class="form-control mb-2" type="text" name="contribuinte" id="contribuinte" 
                        required autofocus>
                    </div>
                 
                    
                    <!-- Acrescentar botoes para gravar ou limpar -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary me-md-2" value="gravar">Gravar</button>
                    <button type="reset" class="btn btn-primary me-md-2" value="limpar">Limpar</button>
                    </div>


                    </fieldset>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
