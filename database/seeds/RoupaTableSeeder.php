<?php

use Illuminate\Database\Seeder;

class RoupaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Roupa::create([
            'marca_id' => 9,
            'estacao_ano_id' => 1,
            'tamanho_id' => 3,
            'tipo-roupa_id' => 1,
            'user_id' => 26,
            'preco' => 20,
            'descricao' => 'Uma descrição sobre a peça de roupa.',
            'image' => 'imagem1'

        ]);

        \App\Roupa::create([
            'marca_id' => 6,
            'estacao_ano_id' => 4,
            'tamanho_id' => 5,
            'tipo-roupa_id' =>6,
            'user_id' => 20,
            'preco' => 10,
            'descricao' => 'Uma descrição sobre a peça de roupa x 2.',
            'image' => 'imagem2'

        ]);

        \App\Roupa::create([
            'marca_id' => 12,
            'estacao_ano_id' => 3,
            'tamanho_id' => 2,
            'tipo-roupa_id' =>4,
            'user_id' => 9,
            'preco' => 30,
            'descricao' => 'Uma descrição sobre a peça de roupa x 3.',
            'image' => 'imagem3'

        ]);
    }
}
