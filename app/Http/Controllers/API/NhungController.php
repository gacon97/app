<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nhung;
use Response;

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

    public function getPlace()
    {
        $nhung = Nhung::orderBy('created_at', 'desc')->first();
        return $nhung;
    }
}
