<?php

use Illuminate\Database\Seeder;

class EstacaoAnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\EstacaoAno::create([
            'name' => 'Inverno'
        ]);

        \App\EstacaoAno::create([
            'name' => 'Outono'
        ]);

        \App\EstacaoAno::create([
            'name' => 'Primavera'
        ]);

        \App\EstacaoAno::create([
            'name' => 'Verao'
        ]);
    }
}
