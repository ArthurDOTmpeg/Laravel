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
    protected $fillable = ['postel_code', 'localities'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'localities';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
