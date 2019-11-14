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

    .title {
        font-size: 20px;
        color: rgb(150,150,150);
        margin-top: 20px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
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

    .m-b-md {
        margin-bottom: 30px;
    }

    .logo{
        width: 300px;
        height: 300px;
        display: block;
        margin:auto;
    }
    .logo img{
        width: 300px;
        height: 300px;
    }

    .options{
        width: 35%;
        height: 300px;
        float: left;
        margin: 7.5%;
        background-color: #56bec3;
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        text-align: center;
        padding-top: 80px;
        border-radius: 25px;
    }

    .roupas_actions{
        width: 100px;
        height: 100px;
        margin-right: auto;
        margin-left: auto;
        display: block;
        padding-bottom: 10px;

    }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="title m-b-md">
          Bem-vindo, {{ Auth::user()->name }} <span class="caret"></span>! <br> Veja ou insira as suas roupas, a escolha é sua!
        </div>
        <p></p>
    </div>

    <section style="width: 100%!important;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <a href="{{url('/list')}}">
                <div class="options">
                    <img class="roupas_actions" src="/images/see_roupa.png">
                    Ver Roupas
                </div>
        </a>

         <a href="{{url('/insert-roupa')}}">
                <div class="options">
                    <img class="roupas_actions" src="/images/upload_roupa.png">
                     Inserir Roupas
                </div>
         </a>

    </section>
@endsection
