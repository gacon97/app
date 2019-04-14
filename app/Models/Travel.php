<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Travel
 * @package App\Models
 * @version March 20, 2019, 4:34 pm UTC
 *
 * @property string name
 * @property string place
 * @property longtext feature
 * @property integer category_id
 * @property string lat
 * @property string lng
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
        'category_id',
        'lat',
        'lng'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'place' => 'string',
        'category_id' => 'integer',
        'lat' => 'string',
        'lng' => 'string'
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
    
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
