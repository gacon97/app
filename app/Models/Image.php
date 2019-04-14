<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * @package App\Models
 * @version April 13, 2019, 2:07 pm UTC
 *
 * @property integer travel_id
 * @property string image
 */
class Image extends Model
{
    use SoftDeletes;

    public $table = 'images';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'travel_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'travel_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function travel()
    {
        return $this->belongsTo('App\Models\Travel');
    }
}
