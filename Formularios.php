<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formularios extends Model
{    
    protected $fillable = ['pnombre', 'snombre', 'nom_usuario', 'ciudad', 'estado', 'sexo']; 

    protected $table = 'formularios';

}
