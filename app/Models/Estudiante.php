<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $primaryKey='id';

   	protected $table='estudiantes';

    protected $fillable = ['identificacion','nombres', 'apellidos', 'correo', 'telefono'];

    protected $hidden = ['created_at','updated_at'];

    public function examenes(){
    	return $this->hasMany('App\Models\Examen');
    }
}
