<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'departamento_id'];
    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto', 'id', 'empleado_id');
    }
    public function departamento(){
    	return $this->belongsTo('App\Models\Departamento');
    }
    public function proyectos(){
    	return $this->belongsToMany('App\Models\Proyecto');
    }
    public function jefedepartamento(){
        return $this->hasOne('App\Models\Departamento');
    }
}