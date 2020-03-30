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
     * One artist can do multiple shows
     */
    
    public function shows(){
        
        return $this->belongsToMany('App\Shows');
    }

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
