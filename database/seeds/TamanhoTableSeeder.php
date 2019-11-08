<?php

use Illuminate\Database\Seeder;

class TamanhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Tamanho::create([
            'name' => 'XS'
        ]);

        \App\Tamanho::create([
            'name' => 'S'
        ]);

        \App\Tamanho::create([
            'name' => 'M'
        ]);

        \App\Tamanho::create([
            'name' => 'L'
        ]);

        \App\Tamanho::create([
            'name' => 'XL'
        ]);

        \App\Tamanho::create([
            'name' => 'XXL'
        ]);

        \App\Tamanho::create([
            'name' => 'XXXL'
        ]);
    }
}
