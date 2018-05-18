<?php

namespace App\Interfaces;
 
interface Member{
    public function login($user);
    public function logout();
    public function register($user);
    public function updateProfile($user);
}
?>