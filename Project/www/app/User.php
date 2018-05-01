<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'postal_code','province','sub_area', 'road', 'area','lane', 'last_name', 'email', 'password','first_name','role_id','address','tel_home','tel_mobile','house_no','village_no'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRole(){
        return $this->hasOne("App\Role","id","role_id");
    }

    public function updateProfile(User $user){
        $this->where("id",$user->id)->update($user);
    }
}
