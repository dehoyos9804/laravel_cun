<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $primaryKey='id';

   	protected $table='historiales';

    protected $fillable = ['fecha', 'sintomas', 'cuadro_clinico', 'paciente_id'];

    protected $hidden = ['created_at','updated_at'];

    //relacion uno a uno
    public function paciente(){
        return $this->belongsTo('App\Models\Paciente', 'paciente_id');
    }
}
