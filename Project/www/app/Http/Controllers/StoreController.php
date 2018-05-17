<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    private $storeModel;
    public function __construct(Store $store)
    {
        $this->storeModel = $store;
    }
    public function createStore(){
        return view("dashboard.booker.create-store");
    }

    public function storeStore(Request $request,$id){
        $input                = $request->all();
        $input["user_id"]     = Auth::user()->id;
        $input["sub_area_id"] = $id;
        $input["logo_path"]   = "";
        if($request->file('logo')){
            $path  = $request->file('logo')->store('logo');
            $input["logo_path"] = $path;

        }
        $this->storeModel->createStore($input);

        return redirect("dashboard/booking/success");
    }
}
