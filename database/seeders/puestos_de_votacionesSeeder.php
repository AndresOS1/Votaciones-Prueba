<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PuestosDeVotaciones;

class puestos_de_votacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PuestosDeVotaciones::create([
            'nombre' => 'puesto de votacion 1',
            'direccion' => 'CALLE 64 NUMERO 15-10',
            'municipio_id' => '1',

        ]);

        PuestosDeVotaciones::create([
            'nombre' => 'puesto de votacion 2',
            'direccion' => 'CALLE 4 NUMERO 05-10',
            'municipio_id' => '2',

        ]);
    }
}
