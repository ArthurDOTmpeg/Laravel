<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'title', 'poster_url',
        'bookable', 'price', 'location_id'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shows';
    
    /**
     * One artist can be of different types
     */
    public function locations()
    {
        return $this->belongsTo('App\Locations');
    }

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
