<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Area extends Model
{   protected $fillable  = ["name","address","width","height","user_id","map_path"];
    public function createArea($input){
        $input["user_id"] = Auth::user()->id;
        return $this->create($input);
    }

    public function getUrlImage(){
        return url("image/area/".$this->id);
    }
    public function subarea(){
        return $this->hasMany("App\SubArea","area_id","id");
    }
  
    public function emptyCount(){
        
       $result = DB::select("SELECT count(*) as empty FROM sub_areas  
        LEFT JOIN bookings ON bookings.sub_area_id = sub_areas.id
        WHERE sub_areas.area_id = ".$this->id." AND bookings.id is null");
        return $this->subarea->count()-$result[0]->empty;
    }
    public function allCount(){
        return $this->subarea->count();
    }
}
