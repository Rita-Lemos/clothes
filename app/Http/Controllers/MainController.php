<?php

namespace App\Http\Controllers;

use App\EstacaoAno;
use App\Http\Requests\RoupaStoreRequest;
use App\Marca;
use App\Roupa;
use App\Tamanho;
use App\Tipo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public  function list()
    {
        $user = Auth::user();
        if ($user == "") {
            return redirect('/login');
        } else {

            $roupa = Roupa::all();

            return view('roupa')
                ->with('roupa', $roupa);
        }

    }


    public function form()
    {

        $user = Auth::user();
        if ($user == "") {
            return redirect('/login');
        } else {
            $estacaoanos = EstacaoAno::all();
            $marcas = Marca::all();
            $tamanhos = Tamanho::all();
            $tipos = Tipo::all();
            $users = User::all();
            return view('insert')->with('marcas', $marcas)->with('estacao_anos', $estacaoanos)->with('tamanhos', $tamanhos)->with('tipos', $tipos)->with('users', $users);
        }
    }



    public function insert(RoupaStoreRequest $request)
    {
        $user = Auth::user();
        if ($user == "") {
            return redirect('/login');
        } else {
            $data = $request->all();

            $file = $request->file('image')->store('images');

            $data['image'] = $file;

            Roupa::create($data);

            return redirect()->route('list');
        }
    }




    public function perfil (Request $request)
    {
        $user = Auth::user();
        if ($user == "") {
            return redirect('/login');
        } else {
            $user = $request->user();

            $roupas = Roupa::whereUserId($user->id)->get();

            return view('perfil')->with('roupa', $roupas)->with('user', $user);
        }
    }




    public function edit(Roupa $id)
    {

        $user = Auth::user();
        if ($user == "") {
            return redirect('/login');
        } else {
            $roupas = Roupa::with("marca", "estacao_ano", "tamanho", "tipo", "user")->where("id", $id->id)->get();
            $estacaoanos = EstacaoAno::all();
            $marcas = Marca::all();
            $tamanhos = Tamanho::all();
            $tipos = Tipo::all();
            $users = User::all();

            return view('edit_roupa')
                ->with('roupa', $roupas)
                ->with('marcas', $marcas)
                ->with('estacao_anos', $estacaoanos)
                ->with('tamanhos', $tamanhos)
                ->with('tipos', $tipos)
                ->with('users', $users);
        }
    }
    public function update(RoupaStoreRequest $request)
    {
        $user = Auth::user();
        if ($user == "") {
            return redirect('/login');
        } else {
            $data = $request->only(["id", "marca_id", "estacao_ano_id", "tamanho_id", "tipo_id", "user_id", "image", "preco", "descricao"]);

            if ($request->hasFile('image')) {
                $file = $request->file('image')->store('images');
                $data['image'] = $file;
            }

            //$filter = Arr::except($data, ['_token']);
            //$filter2 = Arr::except($filter, ['_method']);
            Roupa::where('id', $data['id'])->update($data);

            return redirect('/perfil');
        }
    }
}


