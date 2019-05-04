<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ImageEvent
 * @package App\Models
 * @version May 4, 2019, 2:21 pm UTC
 *
 * @property integer event_id
 * @property string image
 */
class ImageEvent extends Model
{
    use SoftDeletes;

    public $table = 'image_events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'event_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'event_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

        public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
