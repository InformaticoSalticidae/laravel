<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{    
    protected $fillable = ['id', 'descripcion'];
 
    protected $table = 'sexos';

}
