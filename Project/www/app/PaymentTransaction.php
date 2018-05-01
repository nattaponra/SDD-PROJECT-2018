<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{   protected $fillable = ['payment_status','payment_datetime','payment_type',"user_id"];
    public function createTransaction($input){
       return  $this->create($input);
    }
}
