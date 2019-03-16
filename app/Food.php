<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'price', 'type'];

    public function travel()
    {
    	return $this->belongsToMany(Food::class);
    }

    public function imageFoods()
    {
        return $this->hasMany(ImageFood::class);
    }
}
