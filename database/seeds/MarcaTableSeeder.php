<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        \App\Marca::create([
            'name' => 'Zara'
        ]);

        \App\Marca::create([
            'name' => 'Breshka'
        ]);

        \App\Marca::create([
            'name' => 'Stradivarius'
        ]);

        \App\Marca::create([
            'name' => 'Primark'
        ]);

        \App\Marca::create([
            'name' => 'H&M'
        ]);

        \App\Marca::create([
            'name' => 'Hugo Boss'
        ]);

        \App\Marca::create([
            'name' => 'Salsa'
        ]);
    }
}
