<?php

namespace App\Http\Controllers;

use App\Area;
use App\SubArea;
use Illuminate\Http\Request;

class SubAreaController extends Controller
{

    private $subAreaModel;
    private $areaModel;
    public function __construct(Area $area,  SubArea $subArea)
    {
        $this->subAreaModel = $subArea;
        $this->areaModel    = $area;
    }
    public function storeSubArea(Request $request){
        $this->subAreaModel->createSubArea($request->all());
       return redirect("organizer/management/location/subarea?area_id=".$request->input("area_id"))->with(["status"=>"success","message"=>"เพิ่มพื้นที่ย่อยสำเร็จ"]);
    }

    public function deleteSubArea($subAreaId){
        $subArea =   $this->subAreaModel->find($subAreaId);
        $area_id =   $subArea->area_id;
        $this->subAreaModel->find($subAreaId)->delete();
        return redirect("organizer/management/location/subarea?area_id=".$area_id)->with(["status"=>"success","message"=>"ลบพื้นที่ย่อยสำเร็จ"]);
    }
}
