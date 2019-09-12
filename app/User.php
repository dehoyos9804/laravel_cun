<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs(){
        return $this->hasMany('App\Models\Blog');
    }

    //mutator @modificador de campo
    public function setNameAttribute($value){
        $this->attributes['name']=strtoupper($value);
    }

    //accessors
    public function getFullNameAttribute(){
        return "{$this->id} {$this->name}";
    }

    public function getListBlogAttribute(){
        return $this->blogs;
    }

    protected $appends = [
        "full_name",
        "list_blog"
    ];
}
