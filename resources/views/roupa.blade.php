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

    .sub-menu{
        width: 200px;
        height: 695px;
        position: fixed;
        bottom: 0;
        left: 0;
        padding: 10px;
        background-color: #5bbec3!important;
    }

    .estacao_title_filtro{
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        color:rgb(100,100,100);
        display: block;
        margin-left: 10px;
        margin-top: 5px;
        margin-bottom: 0px;
    }

    .filtro_estacao{
        border: none!important;
        display: list-item;
        border-radius: 20px;
        width: 100px;
        text-align: center;
        background-color: transparent!important;
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        height: 30px;
        margin-top: 0px;
        margin-left: 30px;
    }

    .btn_todos{
        border: none!important;
        display: list-item;
        border-radius: 20px;
        width: 150px;
        text-align: center;
        background-color: white;
        color: #5bbec3!important;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        height: 30px;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 35px;

    }

</style>

@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="sub-menu">
                    <a href="{{route('list')}}"><button  class="btn_todos" type="button">Ver Tudo</button></a>

                    <p class="estacao_title_filtro">FILTROS</p>
                    <p class="estacao_title_filtro">Estações do Ano</p>
                    <a href="?sort=Inverno"><button  class="filtro_estacao" type="button">Inverno</button></a>
                    <a href="?sort=Outono"><button  class="filtro_estacao" type="button">Outono</button></a>
                    <a href="?sort=Primavera"><button  class="filtro_estacao" type="button">Primavera</button></a>
                    <a href="?sort=Verao"><button  class="filtro_estacao" type="button">Verão</button></a>
                    <a href="?sort=Outono/Inverno"><button  class="filtro_estacao" type="button">Outono/Inverno</button></a>


                    <p class="estacao_title_filtro">Tipos Roupa</p>
                    <a href="?sort=Camisola"><button  class="filtro_estacao" type="button">Camisola</button></a>
                    <a href="?sort=Calça"><button  class="filtro_estacao" type="button">Calça</button></a>
                    <a href="?sort=T-shirt"><button  class="filtro_estacao" type="button">T-shirt</button></a>
                    <a href="?sort=Calções"><button  class="filtro_estacao" type="button">Calções</button></a>
                    <a href="?sort=Vestido"><button  class="filtro_estacao" type="button">Vestido</button></a>
                    <a href="?sort=Casaco"><button  class="filtro_estacao" type="button">Casaco</button></a>
                    <a href="?sort=Blazer"><button  class="filtro_estacao" type="button">Blazer</button></a>
                    <a href="?sort=Top"><button  class="filtro_estacao" type="button">Top</button></a>
                    <a href="?sort=Blusa"><button  class="filtro_estacao" type="button">Blusa</button></a>
                    <a href="?sort=Polo"><button  class="filtro_estacao" type="button">Polo</button></a>
                    <a href="?sort=Saia"><button  class="filtro_estacao" type="button">Saia</button></a>
                    <a href="?sort=Body"><button  class="filtro_estacao" type="button">Body</button></a>


                </div>

                @foreach($roupa as $roupas)

                    @if($roupas->estacao_ano->name === app('request')->input('sort'))
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="/uploads/{{$roupas->image}}">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="card-title"> {{$roupas->tipo->name}}</h5>
                                        <ul class="descricao_peca">
                                            <li> <span class="lista_roupa"> Marca: </span> {{$roupas->marca->name}}</li>
                                            <li> <span class="lista_roupa"> Estação do Ano: </span> {{$roupas->estacao_ano->name}}</li>
                                            <li> <span class="lista_roupa"> Tamanho da Peça: </span> {{$roupas->tamanho->name}}</li>
                                            <li> <span class="lista_roupa"> Descrição: </span> {{$roupas->descricao}} </li>
                                            <li> <span class="lista_roupa"> Preço:</span> {{$roupas->preco}} €</li>
                                            <li> <span class="lista_roupa"> Vendedor: </span> {{$roupas->user->name}}</li>
                                            <li> <span class="lista_roupa"> Email de contacto: </span> {{$roupas->user->email}}</li>
                                            <li> <span class="lista_roupa"> Tipo Roupa: </span>{{$roupas->tipo->name}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                        @if($roupas->tipo->name === app('request')->input('sort'))
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="/uploads/{{$roupas->image}}">
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="card-title"> {{$roupas->tipo->name}}</h5>
                                            <ul class="descricao_peca">
                                                <li> <span class="lista_roupa"> Marca: </span> {{$roupas->marca->name}}</li>
                                                <li> <span class="lista_roupa"> Estação do Ano: </span> {{$roupas->estacao_ano->name}}</li>
                                                <li> <span class="lista_roupa"> Tamanho da Peça: </span> {{$roupas->tamanho->name}}</li>
                                                <li> <span class="lista_roupa"> Descrição: </span> {{$roupas->descricao}} </li>
                                                <li> <span class="lista_roupa"> Preço:</span> {{$roupas->preco}} €</li>
                                                <li> <span class="lista_roupa"> Vendedor: </span> {{$roupas->user->name}}</li>
                                                <li> <span class="lista_roupa"> Email de contacto: </span> {{$roupas->user->email}}</li>
                                                <li> <span class="lista_roupa"> Tipo Roupa: </span>{{$roupas->tipo->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @if(!app('request')->input('sort'))
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="/uploads/{{$roupas->image}}">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="card-title"> {{$roupas->tipo->name}}</h5>
                                        <ul class="descricao_peca">
                                            <li> <span class="lista_roupa"> Marca: </span> {{$roupas->marca->name}}</li>
                                            <li> <span class="lista_roupa"> Estação do Ano: </span> {{$roupas->estacao_ano->name}}</li>
                                            <li> <span class="lista_roupa"> Tamanho da Peça: </span> {{$roupas->tamanho->name}}</li>
                                            <li> <span class="lista_roupa"> Descrição: </span> {{$roupas->descricao}} </li>
                                            <li> <span class="lista_roupa"> Preço:</span> {{$roupas->preco}} €</li>
                                            <li> <span class="lista_roupa"> Vendedor: </span> {{$roupas->user->name}}</li>
                                            <li> <span class="lista_roupa"> Email de contacto: </span> {{$roupas->user->email}}</li>
                                            <li> <span class="lista_roupa"> Tipo Roupa: </span>{{$roupas->tipo->name}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection


