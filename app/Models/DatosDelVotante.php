<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosDelVotante extends Model
{
    use HasFactory;

    
    protected $table  = "datos_del_votante";

    protected $primaryKey = "id_votante";


    protected $fillable = ['nombre', 'apellidos', 'direccion', 'telefono', 'cedula', 'user_id', 'barrio_id', 'puestos_de_votaciones_id'];

    protected $hidden = ['id_votante'];
}
