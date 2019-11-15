<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoupaStoreRequest;
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
    public function index(Request $request)
    {
        //
        //return Roupa::all();
        $user = $request->user();

        $roupa = Roupa::with('user')->get();

        $response  = [
            'data'=>$roupa,
            'message'=>'Listagem das roupas',
            'result'=>'OK',
            'user'=> $user,
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
    public function store(RoupaStoreRequest $request)
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
     * @param  \Illuminate\Http\Request $request
     * @param \App\Roupa $roupa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roupa $roupa)
    {
        //
        $data = $request->all();


        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');

            $data['image'] = $file;
        }

        $roupa->update($data);

        $response=[
            'data' => $roupa,
            'message'=> 'Roupa Editada',
            'result'=> 'ok'
        ];

        return response($response, 200);
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

        return 'deleted';
    }
}
