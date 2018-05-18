<?php

namespace App\Http\Controllers;

use App\Area;
use App\Store;
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
    public function getStoreImage($store_id){
        ini_set('memory_limit', '-1');
        $store  = Store::find($store_id);
        $image = Image::make(Storage::get($store->logo_path));
        return  $image->response();
    }
}
