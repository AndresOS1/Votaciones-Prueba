<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [

            //comuna 1 Modelo, Loma linda,
            ['nombre' => "Modelo", 'comuna_id'=> 1],
            ['nombre' => "Loma linda", 'comuna_id'=> 1],

            //comuna 2 Villa Melisa. Esperanza.
            ['nombre' => "Villa Melisa", 'comuna_id'=> 2],
            ['nombre' => "Esperanza", 'comuna_id'=> 2],

            //comuna 3 Camilo Torres, Junín,
            ['nombre' => "Camilo Torres", 'comuna_id'=> 3],
            ['nombre' => "Junín", 'comuna_id'=> 3],

            //comuna 4  José María Obando, Minuto de Dios
            ['nombre' => "José María Obando", 'comuna_id'=> 4],
            ['nombre' => "Minuto de Dios", 'comuna_id'=> 4],


            //comuna 5 El Lago, Berlín
            ['nombre' => "El Lago", 'comuna_id'=> 5],
            ['nombre' => "Berlín", 'comuna_id'=> 5],


             //comuna 1 Modelo, Loma linda,
             ['nombre' => "Saují 1", 'comuna_id'=> 6],
             ['nombre' => "Saují 2", 'comuna_id'=> 6],
 
             //comuna 2 Villa Melisa. Esperanza.
             ['nombre' => "El Tablón 1", 'comuna_id'=> 7],
             ['nombre' => "El Tablón 2", 'comuna_id'=> 7],
 
             //comuna 3 Camilo Torres, Junín,
             ['nombre' => "La Tarabita 1", 'comuna_id'=> 8],
             ['nombre' => "La Tarabita 2", 'comuna_id'=> 8],
 
             //comuna 4  José María Obando, Minuto de Dios
             ['nombre' => "Llacuanas 1", 'comuna_id'=> 9],
             ['nombre' => "Llacuanas 2", 'comuna_id'=> 9],
 
 
             //comuna 5 El Lago, Berlín
             ['nombre' => "La Honda 1", 'comuna_id'=> 10],
             ['nombre' => "La Honda 2", 'comuna_id'=> 10],


              //comuna 1 Modelo, Loma linda,
            ['nombre' => "El Mango 1", 'comuna_id'=> 11],
            ['nombre' => "El Mango 2", 'comuna_id'=> 11],

            //comuna 2 Villa Melisa. Esperanza.
            ['nombre' => "El Diviso 1", 'comuna_id'=> 12],
            ['nombre' => "El Diviso 2", 'comuna_id'=> 12],

            //comuna 3 Camilo Torres, Junín,
            ['nombre' => "El Naranjal 1", 'comuna_id'=> 13],
            ['nombre' => "El Naranjal 2", 'comuna_id'=> 13],

            //comuna 4  José María Obando, Minuto de Dios
            ['nombre' => "El Sinaí 1", 'comuna_id'=> 14],
            ['nombre' => "El Sinaí 2", 'comuna_id'=> 14],


            //comuna 5 El Lago, Berlín
            ['nombre' => "La Belleza 1", 'comuna_id'=> 15],
            ['nombre' => "La Belleza 2", 'comuna_id'=> 15],


             //comuna 1 Modelo, Loma linda,
             ['nombre' => "La Pradera 1", 'comuna_id'=> 16],
             ['nombre' => "La Pradera 2", 'comuna_id'=> 16],
 
             //comuna 2 Villa Melisa. Esperanza.
             ['nombre' => "Potrero Largo 1", 'comuna_id'=> 17],
             ['nombre' => "Potrero Largo 2", 'comuna_id'=> 17],
 
             //comuna 3 Camilo Torres, Junín,
             ['nombre' => "Cachimbo 1", 'comuna_id'=> 18],
             ['nombre' => "Cachimbo 2", 'comuna_id'=> 18],
 
             //comuna 4  José María Obando, Minuto de Dios
             ['nombre' => "El Parnaso 1", 'comuna_id'=> 19],
             ['nombre' => "El Parnaso 2", 'comuna_id'=> 19],
 
 
             //comuna 5 El Lago, Berlín
             ['nombre' => "El Mirador 1", 'comuna_id'=> 20],
             ['nombre' => "El Mirador 2", 'comuna_id'=> 20],

             ['nombre' => "Capellanías 1", 'comuna_id'=> 21],
             ['nombre' => "Capellanías 2", 'comuna_id'=> 21],


             ['nombre' => "La Carbonera 1", 'comuna_id'=> 22],
             ['nombre' => "La Carbonera 2", 'comuna_id'=> 22],


             ['nombre' => "Guachicono 1", 'comuna_id'=> 23],
             ['nombre' => "Guachicono 2", 'comuna_id'=> 23],


             ['nombre' => "Los Rastrojos 1", 'comuna_id'=> 24],
             ['nombre' => "Los Rastrojos 2", 'comuna_id'=> 24],


             ['nombre' => "El Morro 1", 'comuna_id'=> 25],
             ['nombre' => "El Morro 2", 'comuna_id'=> 25],


            



            

        ];

       

        DB::table('barrios')->insert($data);


    }
}
