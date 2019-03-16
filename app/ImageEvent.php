<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageEvent extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
