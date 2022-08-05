<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestosDeVotaciones extends Model
{
    use HasFactory;

    protected $table  = "puestos_de_votaciones";

    protected $primaryKey = "id_puesto";


    protected $fillable = ['nombre','direccion', 'municipio_id'];

    protected $hidden = ['id_puesto'];
}
