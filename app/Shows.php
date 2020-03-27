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
     * Relations
     */
    public function locations()
    {
        return $this->belongsTo('App\Locations');
    }
    public function representations()
    {
        return $this->hasMany('App\Representations');
    }
    
    
    /**
     * One show has many different artists
     */
    public function artists_types(){
        return $this->hasMany('App\ArtistsTypes');
    }
   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
