<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = [
            ['nombre' => "Municipio de Popayán"],
            ['nombre' => "Municipio de Almaguer"],
            ['nombre' => "Municipio de Argelia"],
            ['nombre' => "Municipio de Balboa"],
            ['nombre' => "Municipio de Bolívar"]
         ];

        DB::table('municipio')->insert($data);

    }
}
