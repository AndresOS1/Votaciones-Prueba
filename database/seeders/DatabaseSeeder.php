<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call([MunicipioSeeder::class]);
        $this->call([ComunasSeeder::class]);
        $this->call([BarriosSeeder::class]);
        $this->call([RolSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([puestos_de_votacionesSeeder::class]);
        $this->call([datos_del_votanteSeeder::class]);
    


        
    }
}
