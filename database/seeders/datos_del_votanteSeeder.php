<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DatosDelVotante;

class datos_del_votanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DatosDelVotante::create([
            'nombres' => 'Juan camilo',
            'apellidos'=>'yondita',
            'direccion' => 'CALLE 4 NUMERO 05-10',
            'telefono' => '12343234',
            'cedula' => '12343234',
            'mesa' => '33',
            'user_id' => '2',
            'barrio_id' => '1',
            'puestos_de_votaciones_id' => '1',
        ]);

        DatosDelVotante::create([
            'nombres' => 'Edinson Andres',
            'apellidos'=>'Ordoñez Sanchez',
            'direccion' => 'CALLE 4 NUMERO 15-10',
            'telefono' => '123432234',
            'cedula' => '12343234',
            'mesa' => '12',
            'user_id' => '3',
            'barrio_id' => '9',
            'puestos_de_votaciones_id' => '2',
        ]);
    }
}
