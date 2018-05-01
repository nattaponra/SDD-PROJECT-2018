<?php

namespace App\Http\Controllers;

use App\PaymentTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private $paymentTransactionModel;
    public function __construct(PaymentTransaction $paymentTransaction)
    {
        $this->paymentTransactionModel = $paymentTransaction;
    }

    public function payment($type){
        return view("dashboard.payment");
    }

    public function storePayment($type){
        /*Call Api BankOrPaymentGateway and payment successfully.




        */
        $transaction = [
            'payment_status'   => 'success',
            'payment_datetime' => date("Y-m-d H:i:s"),
            'payment_type'     => 'credit-card'
        ];

         $result =  $this->paymentTransactionModel->createTransaction($transaction);
         if($result){
             // 2 is Organizer
             Auth::user()->upgradeAccount(2);
             return redirect("dashboard/payment/success/".md5($result->id));
         }
    }


    public function successPayment(){

        return view("dashboard.payment-success");
    }


}
