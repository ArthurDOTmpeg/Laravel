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
    
    
    protected $table = 'users';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public $timestamps = false;
}
