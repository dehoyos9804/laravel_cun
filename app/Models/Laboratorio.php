<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $primaryKey='id';

   	protected $table='laboratorios';

    protected $fillable = ['razonsocial', 'direccion', 'telefonos'];

    protected $hidden = ['created_at','updated_at'];
}
