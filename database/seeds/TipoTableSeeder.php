<?php

use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Tipo::create([
            'name' => 'Camisola'
        ]);

        \App\Tipo::create([
            'name' => 'Calça'
        ]);

        \App\Tipo::create([
            'name' => 'Camisa'
        ]);

        \App\Tipo::create([
            'name' => 'T-shirt'
        ]);

        \App\Tipo::create([
            'name' => 'Calções'
        ]);

        \App\Tipo::create([
            'name' => 'Vestido'
        ]);

        \App\Tipo::create([
            'name' => 'Casaco'
        ]);

        \App\Tipo::create([
            'name' => 'Blazer'
        ]);

        \App\Tipo::create([
            'name' => 'Top'
        ]);

        \App\Tipo::create([
            'name' => 'Blusa'
        ]);

        \App\Tipo::create([
            'name' => 'Polo'
        ]);
    }
}
