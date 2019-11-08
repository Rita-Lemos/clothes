@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($roupa as $roupas)
                    <div class="card">
                        <div class="card-header">ROUPA</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid" src="/uploads/{{$roupas->image}}">
                                </div>
                                <div class="col-md-6">
                                    <p>{{$roupas->marca->name}}</p>
                                    <p>{{$roupas->estacao_ano->name}}</p>
                                    <p>{{$roupas->tamanho->name}}</p>
                                   {{--<p>{{$roupas->tipo->name}}</p>--}}
                                    <p>{{$roupas->preco}}</p>
                                    <p>{{$roupas->descricao}}</p>
                                    <p>{{$roupas->user->name}}</p>
                                    <p>{{$roupas->user->email}}</p>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
