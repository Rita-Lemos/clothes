<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roupa extends Model
{
    //
    protected  $fillable = [
        'id','marca_id', 'estacao_ano_id', 'tamanho_id', 'tipo_id', 'user_id', 'preco', 'descricao', 'image'
    ];



    public function estacao_ano(){

        return $this->belongsTo('App\EstacaoAno', 'estacao_ano_id');
    }

    public function  marca(){
        return $this->belongsTo('App\Marca', 'marca_id');
    }

    public  function  tamanho(){
        return $this->belongsTo('App\Tamanho', 'tamanho_id');
    }

    public  function tipo(){
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }

    public  function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

}
