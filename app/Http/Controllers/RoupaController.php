<?php

namespace App\Http\Controllers;

use App\Roupa;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoupaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Roupa::all();

        $roupa = Roupa::with('user')->get();

        $response  = [
            'data'=>$roupa,
            'message'=>'Listagem das roupas',
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
     * @bodyParam marca_id string required The marca of the roupa.
     * @bodyParam estacao_ano_id string required The estacao_ano_id of the roupa.
     * @bodyParam tamanho_id string required The tamanho_id of the roupa.
     * @bodyParam tipo_id string required The tipo_id of the roupa.
     * @bodyParam user_id integer required The user creator of the roupa.
     * @bodyParam preco integer required  The preco creator of the roupa.
     * @bodyParam descricao string required  The descricao creator of the roupa.
     * @bodyParam image file required The image of the roupa.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data=$request->all();

        $file = $request->file('image')->store('images');


        $data['image'] = $file;

        $roupa = Roupa::create($data);

        $response  = [
            'data'=>$roupa,
            'message'=>'Listagem das roupas',
            'result'=>'OK'
        ];

        return response($response, 201);


        /*$validator = Validator::make($data, [
            'descricao'=> 'required|string|max:100',
            'preco'=> 'requiride|integer|max:6',
            //'marca_id'=>'required',
            //'estacao_ano_id'=>'required',
            //'tamanho_id'=> 'required',
            //'tipo-roupa_id'=>'required',
            //'user_id'=>'required'
        ],
            [
                'descricao.required'=> 'Insira uma descrição da peça de roupa.',
                'descricao.string'=>'Descrição inválida!',
                'descricao.mas'=>'Descrição demasiado longa!',
                'preco.required'=>'Insira um preço para a peça de roupa.',
                'preco.integer'=>'Preço inválido!',
                'preco.mas'=>'Preço demasiado longo!'

            ]);

        if ($validator->fails())
            return $validator->errors()->all();*/


       /* $roupas = Roupa::create([
            'marca_id' => $data['marca_id'],
            'estacao_ano_id'=> $data['estacao_ano_id'],
            'tamanho_id'=> $data['tamanho_id'],
            'tipo-roupa_id'=> $data['tipo-roupa_id'],
            'user_id'=> $data['user_id'],
            'preco'=>$data['preco'],
            'descricao'=>$data['descricao'],
            'image'=>$data['image']
        ]);

        return $roupas;*/
    }

    /**
     * Display the specified resource.
     *
     * @bodyParam marca_id string required The marca of the roupa.
     * @bodyParam estacao_ano_id string required The estacao_ano_id of the roupa.
     * @bodyParam tamanho_id string required The tamanho_id of the roupa.
     * @bodyParam tipo_id string required The tipo_id of the roupa.
     * @bodyParam user_id integer required The user creator of the roupa.
     * @bodyParam preco integer required  The preco creator of the roupa.
     * @bodyParam descricao string required  The descricao creator of the roupa.
     * @bodyParam image file required The image of the roupa.
     *
     * @param  \App\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function show(Roupa $roupa)
    {
        //
        return $roupa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function edit(Roupa $roupa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam marca_id string required The marca of the roupa.
     * @bodyParam estacao_ano_id string required The estacao_ano_id of the roupa.
     * @bodyParam tamanho_id string required The tamanho_id of the roupa.
     * @bodyParam tipo_id string required The tipo_id of the roupa.
     * @bodyParam user_id integer required The user creator of the roupa.
     * @bodyParam preco integer required  The preco creator of the roupa.
     * @bodyParam descricao string required  The descricao creator of the roupa.
     * @bodyParam image file required The image of the roupa.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roupa $roupas)
    {
        //
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');

            $data['image'] = $file;
        }

        $roupas->update($data);

        return back()->withErrors(['success' => 'User updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roupa $roupa)
    {
        //
        $roupa->delete();

        return back()->withErrors(['success' => 'Roupa apagada!']);
    }
}
