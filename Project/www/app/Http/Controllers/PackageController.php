<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageDetail(){
            return view("dashboard.package-detail");
    }
}
