<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representations extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['shows_id', 'locations_id', 'when'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'representations';
    
    /**
     * Relations
     * 
     */
    public function shows()
    {
        return $this->belongsTo('App\Shows');
    }
    public function locations()
    {
        return $this->belongsTo('App\Locations');
    }
    public function users(){
        
        return $this->belongsToMany('App\Users');
    }

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
