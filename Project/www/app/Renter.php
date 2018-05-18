<?php

namespace App\Interfaces;
use App\Interfaces\Member;
use Illuminate\Support\Facades\Auth;
class Renter extends Model implements Member{

    public function login($user){
        Auth::login($user);
    }
    
    public function logout(){
        Auth::logout();
    }

    public function register($user){
       return $this->create($user);
    }
   
    public function getRole()
    {
        return $this->hasOne("App\Role", "id", "role_id");
    }

    public function updateProfile($user)
    {
        $this->where("id", $user->id)->update($user);
    }

    public function upgradeAccount($roleId){
        $this->update(["role_id" => $roleId]);
    }
}
?>