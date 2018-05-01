<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageDetail($type){
            return view("dashboard.package-detail",compact("type"));
    }
}
