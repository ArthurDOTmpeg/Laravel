<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';
    
    /**
     * One artist can be of different types
     */
    public function types()
    {
        return $this->belongsToMany('App\Types');
    }

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
