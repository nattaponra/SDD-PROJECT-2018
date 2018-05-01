<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Area extends Model
{   protected $fillable  = ["name","address","width","height","user_id","map_path"];
    public function createArea($input){
        $input["user_id"] = Auth::user()->id;
        return $this->create($input);
    }

    public function getUrlImage(){
        return url("image/area/".$this->id);
    }
}
