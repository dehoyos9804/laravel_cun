<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Blog extends Model 
{
   	protected $primaryKey='id';

   	protected $table='blogs';

    protected $fillable = ['id', 'title', 'content', 'user_id'];

    protected $hidden = ['created_at','updated_at'];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }
    
}