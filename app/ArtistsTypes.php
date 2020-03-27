<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistsTypes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['artists_id', 'types_id'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists_types';
    
    /**
     * One type has different artists
     */
    public function artists()
    {
        return $this->belongsToMany('App\Shows');
    }

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
