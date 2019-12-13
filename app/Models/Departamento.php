<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	public function empleado(){
    	return $this->belongsTo('App\Models\Empleado');
    }

    public function empleados(){
    	return $this->hasMany('App\Models\Empleado');
    }

}
