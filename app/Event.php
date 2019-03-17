<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['travel_id', 'name', 'place', 'start_time', 'topic', 'end_time'];
    
    public function travel()
    {
    	return $this->belongsToMany(Travel::class);
    }

    public function imageEvents()
    {
        return $this->hasMany(ImageEvent::class);
    }
}
