<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function getAreaImage($area_id){
        $area  = Area::find($area_id);
        $image = Image::make(Storage::get($area->map_path));
        return  $image->response();
    }
}
