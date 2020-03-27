<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'designation', 'address',
        'locality_id', 'website', 'phone'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';
    
    /**
     * Many locations belong to one locality
     */
    public function localities(){
        return $this->belongsTo('App\Localities');
    }
    public function representations(){
        return $this->hasMany('App\Representations');
    }
    
    /**
     * One location has many shows
     */
    public function shows(){
        return $this->hasMany('App\Shows');
    }
            
   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
