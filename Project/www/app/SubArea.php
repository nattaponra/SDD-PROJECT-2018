<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubArea extends Model
{

    protected $fillable = ["area_id","sub_area_number","width","height"];
    public function createSubArea($input){
            return $this->create($input);
    }
}
