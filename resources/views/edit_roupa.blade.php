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


    .form_edit{
        border:1px solid #5bbec3!important;
        border-radius: 20px!important;
    }

    .card-header{
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        color: white;
        background-color: #5bbec3!important;
        border-radius: 20px!important;
    }

    .text-md-right{
        font-family: 'Montserrat', sans-serif;
        font-size: 17px;
        color: rgb(100,100,100);
    }

    .form-control{
        border: 1px solid #5bbec3!important;
        font-family: 'Montserrat', sans-serif!important;
        font-size: 14px!important;
        color: rgb(50,50,50)!important;
    }

    .btn_update{
        background-color: #5bbec3!important;
        border: none!important;
        margin-left: auto!important;
        margin-right: auto!important;
        display: block!important;
        margin-top: 20px!important;
        width: 100px!important;
        height: 40px!important;
    }

</style>

@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($roupa as $roupas)

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card form_edit">
                        <div class="card-header">Altere Aqui Os Dados da Peça de Roupa</div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('update_roupa', $roupas->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="id" value={{$roupas->id}}>


                                <div class="form-group row">
                                    <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>

                                    <div class="col-md-6">

                                        <select class="form-control" name="marca_id">

                                            @foreach($marcas as $marca)

                                                <option @if($marca->name == $roupas->marca->name)selected @endif value={{ $marca->id }}>{{$marca->name}}</option>
                                            @endforeach

                                        </select>


                                        @error('marca')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="estacao_ano" class="col-md-4 col-form-label text-md-right">Estação Ano</label>

                                    <div class="col-md-6">

                                        <select class="form-control" name="estacao_ano_id">

                                            @foreach($estacao_anos as $estacao_ano)
                                                <option @if($estacao_ano->name == $roupas->estacao_ano->name)selected @endif value={{ $estacao_ano->id }}>{{$estacao_ano->name}}</option>
                                            @endforeach

                                        </select>


                                        @error('estacao_ano')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tamanho" class="col-md-4 col-form-label text-md-right">Tamanho</label>

                                    <div class="col-md-6">

                                        <select class="form-control" name="tamanho_id">

                                            @foreach($tamanhos as $tamanho)
                                                <option @if($tamanho->name == $roupas->tamanho->name)selected @endif value={{ $tamanho->id }}>{{$tamanho->name}}</option>
                                            @endforeach

                                        </select>


                                        @error('tamanho')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tipo" class="col-md-4 col-form-label text-md-right">Tipo de Roupa</label>

                                    <div class="col-md-6">

                                        <select class="form-control" name="tipo_id">

                                            @foreach($tipos as $tipo)
                                                <option @if($tipo->name == $roupas->tipo->name)selected @endif value={{ $tipo->id }}>{{$tipo->name}}</option>
                                            @endforeach

                                        </select>


                                        @error('tipo')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="preco" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>

                                    <div class="col-md-6">
                                        <input id="preco" type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{$roupas->preco}}" required autocomplete="preco">

                                        @error('preco')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descricao') }}</label>

                                    <div class="col-md-6">
                                        <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ $roupas->descricao }}" required autocomplete="descricao">

                                        @error('descricao')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="utilizador" class="col-md-4 col-form-label text-md-right">Utilizador</label>

                                    <div class="col-md-6">

                                        <select class="form-control" name="user_id">

                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{$user->name}}</option>
                                            @endforeach

                                        </select>


                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0 ">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn_update">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
