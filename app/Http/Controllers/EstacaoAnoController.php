<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstacaoAnoStoreRequest;
use App\EstacaoAno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EstacaoAnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @bodyParam name string required The name of the estacao_ano.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //NÃO SEI SE DEVIA FAZER ESTA PARTE DAS RESPOSTAS STANDERIZADAS PARA TODOS OS CONTROLLORS
        //return EstacaoAno::all();

        $estacaoano = EstacaoAno::with('user')->get();

        $response  = [
            'data'=>$estacaoano,
            'message'=>'Listagem das estacoes do ano',
            'result'=>'OK'
        ];

        return response ($response);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required The name of the estacao_ano.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstacaoAnoStoreRequest $request)
    {
        //
        $data=$request->all();

        /*$validator = Validator::make($data, [
            'name'=> 'required|string|max:100',
        ],
            [
                'name.required'=> 'Insira o nome da estação do ano.',
                'name.string'=>'Nome inválido!',
                'name.mas'=>'Nome demasiado longo!'
            ]);

        if ($validator->fails())
            return $validator->errors()->all();*/

        $estacaoano = EstacaoAno::create([
            'name' => $data['name']
        ]);


        $response  = [
            'data'=>$estacaoano,
            'message'=>'Listagem das estações do ano',
            'result'=>'OK'
        ];

        return response($response, 201);

    }

    /**
     * Display the specified resource.
     *
     * @bodyParam name string required The name of the estacao_ano.
     *
     * @param  \App\EstacaoAno  $estacaoAno
     * @return \Illuminate\Http\Response
     */
    public function show(EstacaoAno $estacaoAno)
    {
        //
        return $estacaoAno;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstacaoAno  $estacaoAno
     * @return \Illuminate\Http\Response
     */
    public function edit(EstacaoAno $estacaoAno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required The name of the estacao_ano.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstacaoAno  $estacaoAno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstacaoAno $estacaoAno)
    {
        //
        $data = $request->all();

        $estacaoAno->update($data);

        return $estacaoAno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstacaoAno  $estacaoAno
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstacaoAno $estacaoAno)
    {
        //
        $estacaoAno->delete();
        return 'deleted';
    }
}
