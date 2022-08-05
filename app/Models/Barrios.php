<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrios extends Model
{
    use HasFactory;

    
    protected $table  = "barrios";

    protected $primaryKey = "id_barrio";


    protected $fillable = ['nombre', 'comuna_id'];

    protected $hidden = ['id_barrio'];
}
