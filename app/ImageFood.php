<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageFood extends Model
{
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
