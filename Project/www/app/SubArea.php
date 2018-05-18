<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubArea extends Model
{

    protected $fillable = ["area_id","sub_area_number","width","height"];
    public function createSubArea($input){
            return $this->create($input);
    }

    public function area(){
        return $this->hasOne("App\Area","id","area_id");
    }

    public function booking(){
        return $this->hasOne("App\Booking","sub_area_id","id");
    }

    public function store(){
        return $this->hasOne("App\Store","sub_area_id","id");
    }
}
