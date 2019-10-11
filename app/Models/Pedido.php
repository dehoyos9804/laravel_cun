<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey='id';

   	protected $table='pedidos';

    protected $fillable = ['fecha', 'cliente_id'];

    protected $hidden = ['created_at','updated_at'];

    //relacion uno a muchos
    public function cliente(){
    	return $this->belongsTo('App\Models\Cliente','cliente_id');
    }
}
