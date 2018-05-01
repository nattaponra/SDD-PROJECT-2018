<?php

namespace App\Http\Controllers;

use App\SubArea;
use Illuminate\Http\Request;

class SubAreaController extends Controller
{

    private $subAreaModel;
    public function __construct(SubArea $subArea)
    {
        $this->subAreaModel = $subArea;
    }
    public function storeSubArea(Request $request){
        $this->subAreaModel->createSubArea($request->all());
       return redirect("organizer/management/location/subarea?area_id=".$request->input("area_id"))->with(["status"=>"success","message"=>"เพิ่มพื้นที่ย่อยสำเร็จ"]);
    }

    public function deleteSubArea($subAreaId){
        $this->subAreaModel->find($subAreaId)->delete();
        return redirect("organizer/management/location/subarea?area_id=".$subAreaId)->with(["status"=>"success","message"=>"ลบพื้นที่ย่อยสำเร็จ"]);
    }
}
