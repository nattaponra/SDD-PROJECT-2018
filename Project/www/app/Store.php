<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['user_id',"sub_area_id","name","type","logo_path"];

    public function createStore($input){
        return $this->create($input);
    }
}
