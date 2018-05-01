<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Province;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    private $provinceModel;
    private $userModel;
    public function __construct(Province $province, User $user)
    {
        $this->provinceModel = $province;
        $this->userModel     = $user;
    }

    public function profile(Request $request){
            $user      = Auth::user();
            $provinces = $this->provinceModel->pluck("province_name","province_code");
            return view("dashboard.profile",compact("user","provinces"));
    }

    public function storeProfile(ProfileRequest $request,$userId){

      $user =  $this->userModel->find($userId);
      $user->update($request->all());
      return redirect("dashboard/profile")->with(["status"=>"success","message"=>"อัพเดตข้อมูลสำเร็จ"]);
    }
}
