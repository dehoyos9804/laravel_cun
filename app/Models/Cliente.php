<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey='id';

   	protected $table='clientes';

    protected $fillable = ['identificacion', 'nombres', 'apellidos', 'correo', 'telefono'];

    protected $hidden = ['created_at','updated_at'];

    //relacion uno a muchos
    public function pedidos(){
        return $this->hasMany('App\Models\Pedido');
    }
}
