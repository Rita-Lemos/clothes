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
            'preco.mas'=>'Preço demasiado longo!',
        ]);

        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        Roupa::create($data);

        return redirect()->route('list');
    }




    public function perfil (Request $request){

        $user = $request->user();

        $roupas = Roupa::whereUserId($user->id)->get();

        return view('perfil')->with('roupa', $roupas)->with('user', $user);
    }





    public function edit(Request $request)
    {
        /*$checkrequest = $request->exists('id');
        if ($checkrequest==false) {
            return redirect('/');
        } else {*/
            $data = $request->all();
            $roupas = Roupa::where($data['id'])->get();
            $estacaoanos = EstacaoAno::whereroupa_id($data['id'])->get();
            $marcas = Marca::whereroupa_id($data['id'])->get();
            $tamanhos = Tamanho::whereroupa_id($data['id'])->get();
            $tipos = Tipo::whereroupa_id($data['id'])->get();
            $users = User::whereroupa_id($data['id'])->get();
            return view('edit_roupa')
                ->whit('roupa', $roupas)
                ->with('marcas', $marcas)
                ->with('estacao_anos', $estacaoanos)
                ->with('tamanhos', $tamanhos)
                ->with('tipos', $tipos)
                 ->with('users', $users);
    //    }

    }

    public function update(Request $request)
    {
        $this->validate($request,
            [
                'marca_id' => 'required|exists:marcas,id|integer',
                'estacao_ano_id' => 'required|exists:estacao_anos,id|integer',
                'tamanho_id' => 'required|exists:tamanhos,id|integer',
                'tipo_id' => 'required|exists:tipos,id|integer',
                'user_id' => 'required|exists:users,id|integer',
                'image' => 'required|image',
                'preco' => 'required|integer|max:50000',
                'descricao'=> 'required|string|max:100'
            ],
            [
                'descricao.required'=> 'Insira uma descrição da peça de roupa.',
                'descricao.string'=>'Descrição inválida!',
                'descricao.mas'=>'Descrição demasiado longa!',
                'preco.required'=>'Insira um preço para a peça de roupa.',
                'preco.integer'=>'Preço inválido!',
                'preco.mas'=>'Preço demasiado longo!',
                'marca_id.integer' => 'Formato inválido, insira um número!',
                'marca_id.exists' => 'Essa marca não existe!',
                'marca_id.required' => 'Insira uma marca!',
                'estacao_ano_id.integer' => 'Formato inválido, insira uma número!',
                'estacao_ano_id.exists' => 'Essa estação não existe!',
                'estacao_ano_id.required' => 'Insira uma estação!',
                'tamanho_id.integer' => 'Formato inválido, insira um número!',
                'tamanho_id.exists' => 'Essa tamanho não existe!',
                'tamanho_id.required' => 'Insira um tamanho!',
                'tipo_id.integer' => 'Formato inválido, insira um número!',
                'tipo_id.exists' => 'Essa tipo não existe!',
                'tipo_id.required' => 'Insira um tipo!',
                'user_id.integer' => 'Formato inválido, insira um número!',
                'user_id.exists' => 'Essa user não existe!',
                'user_id.required' => 'Insira um user!'
            ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;
        }

        $filter = Arr::except($data, ['_token']);
        $filter2 = Arr::except($filter, ['_method']);
        Roupa::where('id', $data['id'])->update($filter2);

        return redirect('/perfil');
    }

}


