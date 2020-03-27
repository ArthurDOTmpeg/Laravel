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
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
