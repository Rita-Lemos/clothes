@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($roupa as $roupas)

        <div class="row">
            <div class="col-md-4">

              <div class="card shadow mb-4">

        <div class="card-body">

            <form method="POST" action="{{ route('update_roupa', $roupas->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value="{{}}">


                <div class="form-group row">
                    <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>

                    <div class="col-md-6">

                        <select class="form-control" name="marca_id">

                            @foreach($marcas as $marca)
                                <option value="{{ $marca->id }}">{{$marca->name}}</option>
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
                                <option value="{{ $estacao_ano->id }}">{{$estacao_ano->name}}</option>
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
                                <option value="{{ $tamanho->id }}">{{$tamanho->name}}</option>
                            @endforeach

                        </select>


                        @error('tamanho')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                {{--<div class="form-group row">
                    <label for="tipo" class="col-md-4 col-form-label text-md-right">Tipo de Roupa</label>

                    <div class="col-md-6">

                        <select class="form-control" name="tipo_id">

                            @foreach($tipos as $tipo)
                                <option value="{{ $tipo->id }}">{{$tipo->name}}</option>
                            @endforeach

                        </select>


                        @error('tipo')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>--}}

                <div class="form-group row">
                    <label for="preco" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>

                    <div class="col-md-6">
                        <input id="preco" type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{ old('preco') }}" required autocomplete="preco">

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
                        <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" required autocomplete="descricao">

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

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
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
