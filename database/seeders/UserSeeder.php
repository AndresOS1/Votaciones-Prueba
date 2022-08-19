<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'avatar' => '/storage/avatar/j6SSzyhk3v1yZ1boAphOFQy0p8w0ua4JK5q9Y49A.png',
            'userName' => 'Capitan Andres',
            'nombres' => 'Andres',
            'apellidos' => 'Ordoñez',
            'celular' => '3007763161',
            'tipoUsuario' => 'Capitan',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ])->assignRole('Admin');

        User::create([
            'avatar' => '/storage/avatar/j6SSzyhk3v1yZ1boAphOFQy0p8w0ua4JK5q9Y49A.png',
            'userName' => 'Lider Luna',
            'nombres' => 'Luna',
            'apellidos' => 'Giraldo',
            'celular' => '3003137632',
            'tipoUsuario' => 'Lider',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ])->assignRole('Lider');

        User::create([
            'avatar' => '/storage/avatar/j6SSzyhk3v1yZ1boAphOFQy0p8w0ua4JK5q9Y49A.png',
            'userName' => 'Lider Anni',
            'nombres' => 'Anni',
            'apellidos' => 'Melisa',
            'celular' => '3217655438',
            'tipoUsuario' => 'Lider',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ])->assignRole('Lider');

        User::create([
            'avatar' => '/storage/avatar/j6SSzyhk3v1yZ1boAphOFQy0p8w0ua4JK5q9Y49A.png',
            'userName' => 'Duvan gay',
            'nombres' => 'milton',
            'apellidos' => 'no se',
            'celular' => '3009763261',
            'tipoUsuario' => 'Votante',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ])->assignRole('Votante');

    }
}
