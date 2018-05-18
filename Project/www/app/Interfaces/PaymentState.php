<?php

namespace App\Interfaces;
 
interface PaymentState{
    public function getPaymentStatus();
    public function getPaymentAmount();
}
?>