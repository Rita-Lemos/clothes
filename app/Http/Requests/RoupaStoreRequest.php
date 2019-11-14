<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class RoupaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'marca_id' => 'required|exists:marcas,id|integer',
            'estacao_ano_id' => 'required|exists:estacao_anos,id|integer',
            'tamanho_id' => 'required|exists:tamanhos,id|integer',
            'tipo_id' => 'required|exists:tipos,id|integer',
            'user_id' => 'required|exists:users,id|integer',
            'image' => 'required|image',
            'preco' => 'required|integer|max:50000',
            'descricao'=> 'required|string|max:100'
        ];
    }

    public function messages()
    {
        return[
            'descricao.required'=> 'Insira uma descrição da peça de roupa.',
            'descricao.string'=>'Descrição inválida!',
            'descricao.mas'=>'Descrição demasiado longa!',
            'preco.required'=>'Insira um preço para a peça de roupa.',
            'preco.integer'=>'Preço inválido!',
            'preco.max'=>'Preço demasiado longo!',
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
            'user_id.required' => 'Insira um user!',
            'image.required'=>'Insira uma imagem',
            'image.image'=>'Insira um formato válido!'

        ];
    }


    protected  function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'data'=>$validator->errors(),
                    'msg'=>'Erro de validação.'
                ],  422));
    }
}
