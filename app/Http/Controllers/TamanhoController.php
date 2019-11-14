<?php

namespace App\Http\Controllers;

use App\Http\Requests\TamanhoStoreRequest;
use App\Tamanho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TamanhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Tamanho::all();

        $tamanho = Post::with('user')->get();

        $response  = [
            'data'=>$tamanho,
            'message'=>'Listagem dos tamanhos de roupa',
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
     * @bodyParam name string required The name of the tamanho.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TamanhoStoreRequest $request)
    {
        //
        $data = $request->all();

        /*$validator = Validator::make($data, [
            'name'=> 'required|string|max:8',
        ],
            [
                'name.required'=> 'Insira um tamanho de peça de roupa.',
                'name.string'=>'Nome inválido!',
                'name.mas'=>'Nome demasiado longo!'
            ]);

        if ($validator->fails())
            return $validator->errors()->all();*/

        $tamanho = Tamanho::create([
            'name' => $data['name']
        ]);

        $response = [
            'data' => $tamanho,
            'message' => 'Listagem das marcas',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @bodyParam name string required The name of the tamanho.
     *
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function show(Tamanho $tamanho)
    {
        //
        return $tamanho;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamanho $tamanho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required The name of the tamanho.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamanho $tamanho)
    {
        //
        $data = $request->all();

        $tamanho->update($data);

        return $tamanho;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamanho $tamanho)
    {
        //
        $tamanho->delete();
        return 'deleted';
    }
}
