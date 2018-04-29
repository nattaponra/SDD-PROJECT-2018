<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function profile(Request $request){
        if($request->method() == "POST"){

        }else{
            $user = Auth::user();
            return view("dashboard.profile",compact("user"));
        }

    }
}
