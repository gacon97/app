<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nhung;

class NhungController extends Controller
{
    public function add($lat, $lng)
    {
        $nhung = new Nhung();
        $nhung->lat = $lat;
        $nhung->lng = $lng;
        $nhung->save();
        return "ok da xong";
    }
}
