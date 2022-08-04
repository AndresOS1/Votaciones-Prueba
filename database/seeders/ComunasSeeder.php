<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            //Popayán
            ['nombre' => "Comuna 1", 'municipio_id'=> 1],
            ['nombre' => "Comuna 2", 'municipio_id'=> 1],
            ['nombre' => "Comuna 3", 'municipio_id'=> 1],
            ['nombre' => "Comuna 4", 'municipio_id'=> 1],
            ['nombre' => "Comuna 5", 'municipio_id'=> 1],

            //Almaguer
            //Saují, El Tablón, La Tarabita, Llacuanas, La Honda,
            ['nombre' => "Saují", 'municipio_id'=> 2],
            ['nombre' => "El Tablón", 'municipio_id'=> 2],
            ['nombre' => "La Tarabita", 'municipio_id'=> 2],
            ['nombre' => "Llacuanas", 'municipio_id'=> 2],
            ['nombre' => "La Honda", 'municipio_id'=> 2],

            //Argelia
            ['nombre' => "El Mango", 'municipio_id'=> 3],
            ['nombre' => "El Diviso", 'municipio_id'=> 3],
            ['nombre' => "El Naranjal", 'municipio_id'=> 3],
            ['nombre' => "El Sinaí", 'municipio_id'=> 3],
            ['nombre' => "La Belleza", 'municipio_id'=> 3],


            //Balboa
            //La Pradera, Potrero Largo, Cachimbo, El Parnaso, El Mirador,
            ['nombre' => "La Pradera", 'municipio_id'=> 4],
            ['nombre' => "Potrero Largo", 'municipio_id'=> 4],
            ['nombre' => "Cachimbo", 'municipio_id'=> 4],
            ['nombre' => "El Parnaso", 'municipio_id'=> 4],
            ['nombre' => "El Mirador", 'municipio_id'=> 4],


            //Bolivar
            //Capellanías, La Carbonera, Guachicono, Los Rastrojos, El Morro,
            ['nombre' => "Capellanías", 'municipio_id'=> 5],
            ['nombre' => "La Carbonera", 'municipio_id'=> 5],
            ['nombre' => "Guachicono", 'municipio_id'=> 5],
            ['nombre' => "Los Rastrojos", 'municipio_id'=> 5],
            ['nombre' => "El Morro", 'municipio_id'=> 5],


         ];

        DB::table('comuna')->insert($data);
    }
}
