<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 * @version April 19, 2019, 7:46 am UTC
 *
 * @property integer travel_id
 * @property string name
 * @property string place
 * @property string topic
 * @property dateTime start_time
 * @property dateTime end_time
 */
class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'travel_id',
        'name',
        'place',
        'topic',
        'start_time',
        'end_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'travel_id' => 'integer',
        'name' => 'string',
        'place' => 'string',
        'topic' => 'string',
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
