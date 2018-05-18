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


    public function upgradeUser($type){
        $user = Auth::user();

        $verifyLists = [
            
            empty($user->tel_home),
            empty($user->tel_mobile),
            empty($user->house_no),
            empty($user->village_no),
            empty($user->lane),
            empty($user->road),
            empty($user->area),
            empty($user->province),
            empty($user->postal_code),
            empty($user->card_id),
         ];

        foreach ($verifyLists as $list){
            if($list){
                return redirect("dashboard/profile")->with(["status"=>"fail","message"=>"กรุณากรอกข้อมูลของคุณให้ครับถ้วน ก่อนทำการอัพเดตบัญชี"]);
            }
        }
        return redirect("dashboard/package/".$type);
    }


    public function verifyProfileUser($user){
        return $user;
//         $verifyLists = [
//            empty($user->address),
//            empty($user->tel_home),
//            empty($user->tel_mobile),
//            empty($user->house_no),
//            empty($user->village_no),
//            empty($user->lane),
//            empty($user->road),
//            empty($user->area),
//            empty($user->sub_area),
//            empty($user->province),
//            empty($user->postal_code),
//         ];
//        if (!in_array(false, $verifyLists)) {
//            return "sss";
//        }
//        return "xxx";

    }
}
