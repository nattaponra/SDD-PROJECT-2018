<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected  $fillable = ["user_id","sub_area_id"];

    public function createBooking($userId, $sub_areaId){
        $this->create([
            'user_id' => $userId,
            'sub_area_id' =>$sub_areaId
        ]);
    }

    public function subArea(){
        return $this->hasOne("App\SubArea","id","sub_area_id");
    }

}
