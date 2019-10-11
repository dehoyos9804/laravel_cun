<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $primaryKey='id';

   	protected $table='pacientes';

    protected $fillable = ['identificacion', 'nombres', 'apellidos', 'correo', 'telefono'];

    protected $hidden = ['created_at','updated_at'];

    //relacion uno a uno
    public function historial(){
        return $this->hasOne('App\Models\Historial');
    }
}
