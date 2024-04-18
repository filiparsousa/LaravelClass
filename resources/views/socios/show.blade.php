@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Detalhes do Sócio {{$socio->nome}}</b></div>


                <div class="card-body">
                    
                <style>
                        body {background-color:lightslategray;}
                        .socio-table {
                            border-collapse: collapse;
                            width: 100%;
                        }

                        .socio-table td,.socio-table th {
                            border: 1px solid #ddd;
                            padding: 8px;
                        }

                        .socio-table tr:nth-child(even){background-color: #f2f2f2;}

                        .socio-table tr:hover {background-color: #ddd;}

                        .socio-table th {
                            padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #4CAF50;
                            color: white;
                        }
                    </style>

<table class="table socio-table">
        <tbody>
        <tr>
                <td>ID</td>
                <td>{{ $socio->user_id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $socio->nome }}</td>
            </tr>
            <tr>
                <td>cartão de cidadão</td>
                <td>{{ $socio->CC  }}</td>
            </tr>
             <tr>
                <td>Morada</td>
                <td>{{ $socio->morada }}</td>
            </tr>
            <tr>
                <td>Código Postal</td>
                <td>{{ $socio->cod_postal }}</td>
            </tr>
            <tr>
                <td>Localidade</td>
                <td>{{ $socio->localidade}}</td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td>{{ $socio->telefone}}</td>
            </tr>
            </tbody>
    </table>
            <!-- "url()->previous()" voltar a pagina anterior -->
            <a href="{{ url()->previous() }}" class="btn btn-primary"> Voltar </a>    
            <a href="{{route('socio.edit', $socio->id)}}" class="btn btn-primary"> Editar </a>
            <a href="{{route('socio.confirma_delete',$socio->id)}}" class="btn btn-primary"> Apagar </a>
            </tbody>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
