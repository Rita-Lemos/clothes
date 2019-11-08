<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Tipo::all();

        $tipo = Tipo::with('user')->get();

        $response  = [
            'data'=>$tipo,
            'message'=>'Listagem dos tipos de roupa',
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
     * @bodyParam name string required The name of the tipo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    $data=$request->all();

        $validator = Validator::make($data, [
            'name'=> 'required|string|max:50',
        ],
            [
                'name.required'=> 'Insira o nome de um tipo de roupa.',
                'name.string'=>'Nome inválido!',
                'name.mas'=>'Nome demasiado longo!'
            ]);

        if ($validator->fails())
            return $validator->errors()->all();

    $tipo = Tipo::create([
       'name' => $data['name']
    ]);

    return $tipo;

    }

    /**
     * Display the specified resource.
     *
     * @bodyParam name string required The name of the tipo.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        //
        return $tipo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required The name of the tipo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        //
        $data = $request->all();

        $tipo->update($data);

        return $tipo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        //
        $tipo->delete();
        return 'deleted';
    }
}
