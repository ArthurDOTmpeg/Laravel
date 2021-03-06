<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localities extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['postal_code', 'localities'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'localities';
    
   /**
     * OneToMany association with the table Locations 
     * 
     * One Locality has many locations
     */
    public function locations()
    {
        return $this->hasMany('App\Locations', 'locality_id');
    }
            
   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
