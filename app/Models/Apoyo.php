<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apoyo extends Model
{

    //DECLARAMOS EL NOMBRE DE LA TABLA EN NUESTRA BASE DE DATOS
    protected $table = 'apoyos';

    //DECLARAMOS LA LLAVE PRIMARIA DE LA TABLA.
    protected $primaryKey = 'id_apoyo';

    public $timestamps = false;

    //AQUI LOS ELEMENTOS DE LA TABLA
    protected $fillable = [
        'fecha_apoyo',
        'ubicacion',
        'observaciones'
    ];

}
