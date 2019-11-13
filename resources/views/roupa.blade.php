<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<!-- Styles -->
<style>
    html, body {
        background-color: whitesmoke;
        height: 100vh;
        margin: 0;
    }


    .links > a {
        color: rgb(150,150,150);
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;

    }

    .logo img{
        width: 300px;
        height: 300px;
    }

    .descricao_peca{
        margin-top: 35px;
    }


    .descricao_peca li{
        font-family: 'Montserrat', sans-serif;
        color: rgb(150,150,150);
        font-size: 15px;
        margin-top: 15px;
    }

    .lista_roupa{
        font-family: 'Montserrat', sans-serif;
        color: #56bec3;
        font-size: 18px;
    }

    ul{
        list-style: none!important;
        text-decoration: none!important;
        padding: 0px;
    }

    .card-title{
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        color: #56bec3;
        font-weight: 500;
    }

    .card{
        margin-bottom: 20px!important;
        border-color: #5bbec3!important;
        border-radius: 30px!important;
    }

</style>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($roupa as $roupas)
                 <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid" src="/uploads/{{$roupas->image}}">
                                </div>
                                <div class="col-md-6">
                                  <h5 class="card-title"></h5>
                                    <ul class="descricao_peca">
                                        <li> <span class="lista_roupa"> Marca: </span> {{$roupas->marca->name}}</li>
                                        <li> <span class="lista_roupa"> Estação do Ano: </span> {{$roupas->estacao_ano->name}}</li>
                                        <li> <span class="lista_roupa"> Tamanho da Peça: </span> {{$roupas->tamanho->name}}</li>
                                        <li> <span class="lista_roupa"> Descrição: </span> {{$roupas->descricao}} </li>
                                        <li> <span class="lista_roupa"> Preço:</span> {{$roupas->preco}} €</li>
                                        <li> <span class="lista_roupa"> Vendedor: </span> {{$roupas->user->name}}</li>
                                        <li> <span class="lista_roupa"> Email de contacto: </span> {{$roupas->user->email}}</li>
                                        {{--<li> <span class="lista_roupa"> Tipo de roupa: </span> {{$roupas->tipo->name}}</li>--}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


