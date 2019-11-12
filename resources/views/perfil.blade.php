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

    .title{
        font-family: 'Montserrat', sans-serif;
        font-size: 25px;
        margin: auto!important;
        display: block!important;
        font-weight: 500;
        color: #5bbec3!important;
    }

    .card_info_user{
        margin-top: 20px;


    }

    .info_user{
        font-size: 18px;
        color: #5bbec3!important;
        list-style: circle;
        margin-left: 20px;
    }

    .info_user span{


        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        color: rgb(150,150,150);
        margin: 10px;

    }

</style>

@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="title">PERFIL</div>
        <ul class="card_info_user">
            <li class="info_user">  Nome: <span>{{$user->name}}  </span> </li>
            <li class="info_user">  Email: <span>{{$user->email}}</span> </li>
            <li class="info_user">  Criada: <span>{{$user->created_at}}</span> </li>
        </ul>

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
                                        <h5 class="card-title">Tipo de Roupa</h5>
                                        <ul class="descricao_peca">
                                            <li> <span class="lista_roupa"> Marca: </span> {{$roupas->marca->name}}</li>
                                            <li> <span class="lista_roupa"> Estação do Ano: </span> {{$roupas->estacao_ano->name}}</li>
                                            <li> <span class="lista_roupa"> Tamanho da Peça: </span> {{$roupas->tamanho->name}}</li>
                                            <li> <span class="lista_roupa"> Descrição: </span> {{$roupas->descricao}} </li>
                                            <li> <span class="lista_roupa"> Preço:</span> {{$roupas->preco}} €</li>
                                            <li> <span class="lista_roupa"> Vendedor: </span> {{$roupas->user->name}}</li>
                                            <li> <span class="lista_roupa"> Email de contacto: </span> {{$roupas->user->email}}</li>
                                        </ul>
                                        @if(!$roupas->deleted_at)
                                            <a href="{{ route('update_roupa', $roupas->id) }}"><button class="btn btn-success btn-circle btn-sm"><i class="fa fa-edit"></i></button></a>

                                            <form style="display: inline-block" method="post" action="{{ route('roupa.destroy', $roupas->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
    </div>
@endsection


