<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['login', 'password', 'firstname',
        'lastname', 'email', 'language', 'roles_id'];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Multiple users can belong to a role
     * 
     */
    public function roles(){
        
        return $this->belongsTo('App\Roles');
    }
    public function representations(){
        
        return $this->belongsToMany('App\Representations');
    }
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public $timestamps = false;
}
