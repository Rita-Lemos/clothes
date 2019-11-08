<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Marca::all();

        $marca = Marca::with('user')->get();

        $response  = [
            'data'=>$marca,
            'message'=>'Listagem das marcas',
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
     * @bodyParam name string required The name of the marca.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();

       $validator = Validator::make($data, [
            'name'=> 'required|string|max:100',
        ],
            [
                'name.required'=> 'Insira o nome de uma marca de roupa.',
                'name.string'=>'Nome inválido!',
                'name.mas'=>'Nome demasiado longo!'
            ]);

        if ($validator->fails())
            return $validator->errors()->all();

        $marca = Marca::create([
            'name' => $data['name']
        ]);

        return $marca;
    }

    /**
     * Display the specified resource.
     *
     * @bodyParam name string required The name of the marca.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
        return $marca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required The name of the marca.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        //
        $data = $request->all();

        $marca->update($data);

        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //
        $marca->delete();
        return 'deleted';
    }
}
