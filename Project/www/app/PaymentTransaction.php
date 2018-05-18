<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\PaymentState;
class PaymentTransaction extends Model implements PaymentState
{   protected $fillable = ['payment_status','payment_datetime','payment_type',"user_id"];
    public function createTransaction($input){
       return  $this->create($input);
    }
    public function getPaymentStatus(){
       return $this->payment_status;
    }
    public function getPaymentAmount(){
        return $this->amount;
    }

}
