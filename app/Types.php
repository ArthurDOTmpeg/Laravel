<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['types'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'types';
    
    /**
     * One type has different artists
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artists');
    }

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
