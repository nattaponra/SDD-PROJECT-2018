<?php

namespace App\Http\Controllers;

use App\Area;
use App\Booking;
use App\PaymentTransaction;
use App\SubArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    private $paymentTransactionModel;
    private $bookingModel;
    public function __construct(PaymentTransaction $paymentTransaction ,Booking $booking)
    {
        $this->paymentTransactionModel = $paymentTransaction;
        $this->bookingModel            = $booking;
    }
    public function search(Request $request){
        $q = $request->input("q");
        $page = $request->input("page",1);
        $areas = Area::where('name', 'like', '%'.$q.'%')->orWhere('address', 'like', '%'.$q.'%')->paginate(5);
        $areas->appends(["q"=> $q]);
        return view("dashboard.booker.search",compact("areas","q","page"));
    }

    public function detailArea(Request $request,$id){
        $page = $request->input("page",1);
        $area = Area::find($id);
        $subAreas = SubArea::where("area_id",$area->id)->paginate(5);

        return view("dashboard.booker.area-detail",compact("subAreas","page","area"));
    }

    public function payment($id){
        $subAreas = SubArea::find($id);
        return view("dashboard.booker.payment",compact('subAreas'));
    }

    public function storePayment($id){
        $subAreas    = SubArea::find($id);
        $transaction = [
            'payment_status'   => 'success',
            'payment_datetime' => date("Y-m-d H:i:s"),
            'payment_type'     => 'buy-sub-area',
            'user_id' => Auth::user()->id
        ];

        $result =  $this->paymentTransactionModel->createTransaction($transaction);
        $this->bookingModel->createBooking(Auth::user()->id,$id);
        return redirect("dashboard/booking/success");
    }

    public function successPayment(){
        return view("dashboard.booker.payment-success");
    }

    public function myBooking(Request $request){
        $page = $request->input("page",1);
        $bookings = Booking::where("user_id",Auth::user()->id)->paginate(5);
        return view("dashboard.booker.my-booking",compact('bookings',"page"));
    }
}
