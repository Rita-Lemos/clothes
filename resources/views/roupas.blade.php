@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">ROUPA</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="/uploads/{{$roupa->image}}">
                            </div>
                            <div class="col-md-6">
                                <p>{{$roupa->marca_id}}</p>
                                <p>{{$roupa->estacao_ano_id}}</p>
                                <p>{{$roupa->tamanho_id}}</p>
                                <p>{{$roupa->preco}}</p>
                                <p>{{$roupa->descricao}}</p>
                                <p>{{$roupa->user_id}}</p>
                            </div>


                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
@endsection
