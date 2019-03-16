<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Travel
 * @package App\Models
 * @version March 15, 2019, 7:28 am UTC
 *
 * @property string name
 * @property string place
 * @property string feature
 * @property integer category_id
 */
class Travel extends Model
{
    use SoftDeletes;

    public $table = 'travels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'place',
        'feature',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'place' => 'string',
        'feature' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }
    
}
