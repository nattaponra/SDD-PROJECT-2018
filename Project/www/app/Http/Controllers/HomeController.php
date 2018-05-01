<?php

namespace App\Http\Controllers;

use App\Area;
use App\SubArea;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $areas = Area::paginate(6);
        return view('main',compact("areas"));
    }
    public function detail($area_id){
        $area = Area::find($area_id);
        $subAreas = SubArea::where("area_id",$area_id)->get();

        return view('detail-area',compact("area","subAreas"));
    }
    public function registerOption(){
        return view("pricing");
    }
}
