<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono'];
    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto', 'id', 'empleado_id');
    }
}