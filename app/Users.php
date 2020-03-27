<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['login', 'password', 'firstname',
        'lastname', 'email', 'language', 'role_id'];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Multiple users can belong to on role
     * 
     */
    public function roles(){
        
        return $this->belongsTo('App\roles');
    }
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public $timestamps = false;
}
