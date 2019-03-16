<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const TYPE = ['music', 'countdown', 'festival', 'book'];
	
    protected $fillable = ['name', 'type'];

    public function travels()
    {
    	return $this->hasMany(Travel::class);
    }
}
