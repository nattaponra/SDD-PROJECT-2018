<?php

namespace App\Http\Controllers;

use App\Area;
use App\SubArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    private $areaModel;
    public function __construct(Area $area)
    {
        $this->areaModel = $area;
    }

    public function manageLocation(){
        $areas = Area::where("user_id",Auth::user()->id)->get();
        return view("dashboard.organizer.manage",compact("areas"));
    }

    public function createLocation(){
        return view("dashboard.organizer.create");
    }

    public function storeLocation(Request $request){
        $path  = $request->file('map')->store('areas_map');
        $input = $request->all();
        $input["map_path"] = $path;
        $this->areaModel->createArea($input);
        return  redirect("organizer/management/location")->with(["status"=>"success","message"=>"สร้างพื้นที่สำเร็จ"]);
    }

    public function editLocation($areaId){
        $area = Area::find($areaId);
        return view("dashboard.organizer.edit",compact("area"));
    }

    public function updateLocation(Request $request, $areaId){
        $area  = Area::find($areaId);
        $input = $request->all();
        if($request->file('map')){
            $path  = $request->file('map')->store('areas_map');
            $input["map_path"] = $path;

        }

        $area->update($input);
        return  redirect("organizer/management/location")->with(["status"=>"success","message"=>"แก้ไขพื้นที่สำเร็จ"]);
    }
    public function deleteLocation($areaId){
        $area = Area::find($areaId);
        $area->delete();
        return  redirect("organizer/management/location")->with(["status"=>"success","message"=>"ลบพื้นที่สำเร็จ"]);
    }

    public function subLocation(Request $request){
        $area = null;
        $subAreas = null;
        if($request->input("area_id")){

            $area = Area::find($request->input("area_id"));
            if(!empty($area)){
                $subAreas = SubArea::where("area_id",$area->id)->get();
            }

        }


        $areas = Area::pluck("name","id");
        $areas->prepend('None', 0);
        return view("dashboard.organizer.manage-subarea",compact("area","areas","subAreas"));
    }
}
