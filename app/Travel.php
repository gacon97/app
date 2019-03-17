<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['name', 'place', 'feature'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function events()
    {
    	return $this->hasMany(Event::class);
    }

    public function foods()
    {
    	return $this->belongsToMany(Food::class);
    }

    public function images()
    {
    	return $this->hasMany(Image::class);
    }
}
