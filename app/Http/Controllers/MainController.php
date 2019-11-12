<?php

namespace App\Http\Controllers;

use App\EstacaoAno;
use App\Marca;
use App\Roupa;
use App\Tamanho;
use App\Tipo;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public  function list()
    {

        $roupa = Roupa::all();

        return view('roupa')
            ->with('roupa', $roupa);
    }


    public function form()
    {
        $estacaoanos = EstacaoAno::all();
        $marcas = Marca::all();
        $tamanhos = Tamanho::all();
        $tipos = Tipo::all();
        $users = User::all();
        return view('insert')->with('marcas', $marcas)->with('estacao_anos', $estacaoanos)->with('tamanhos', $tamanhos)->with('tipos', $tipos)->with('users', $users);

    }



    public function insert(Request $request)
    {
        $this->validate($request, [
            'marca_id' => 'required|exists:marcas,id|integer',
            'estacao_ano_id' => 'required|exists:estacao_anos,id|integer',
            'tamanho_id' => 'required|exists:tamanhos,id|integer',
            'tipo_id' => 'required|exists:tipos,id|integer',
            'user_id' => 'required|exists:users,id|integer',
            'image' => 'required|image',
            'preco' => 'required|integer|max:50000',
            'descricao'=> 'required|string|max:100'
        ], [
            'descricao.required'=> 'Insira uma descrição da peça de roupa.',
            'descricao.string'=>'Descrição inválida!',
            'descricao.mas'=>'Descrição demasiado longa!',
            'preco.required'=>'Insira um preço para a peça de roupa.',
            'preco.integer'=>'Preço inválido!',
            'preco.mas'=>'Preço demasiado longo!'
        ]);

        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        Roupa::create($data);

        return redirect()->route('list');
    }


    public function perfil (){
        $user = User::all();
        return view('perfil')-> with('user', $user);
    }
}


