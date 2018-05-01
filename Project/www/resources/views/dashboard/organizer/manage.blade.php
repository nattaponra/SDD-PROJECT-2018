@extends('layouts.dashboard.app')



@section("dashboard-content")
    <style>
        .img{
            width: 45px;
            display: block;
            margin: 0 auto;
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
            cursor: pointer;
        }
        .img:hover{
            width: 50px;
            -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
            filter: grayscale(0%);
        }
        .menu{
           text-align: center;
            font-size: 15px;
        }
    </style>
     <br><br>
    <div class="row"  >
        <div class="col-sm">
            <img onclick="window.location.href='{{url("organizer/management/location")}}'" class="img" src="{{url("assets/images/square-layouting-with-black-square-in-east-area.png")}}">
            <h2 class="menu">สถานที่ทั้งหมด</h2>
            <br>
        </div>
        <div class="col-sm">
            <img onclick="window.location.href='{{url("organizer/management/location/create")}}'" class="img" src="{{url("assets/images/rental-management-create.png")}}">
            <h2 class="menu">สร้างสถานที่จัดงาน</h2>
            <br>
        </div>
        <div class="col-sm"  >
            <img onclick="window.location.href='{{url("/organizer/management/location/subarea")}}'" class="img" src="{{url("assets/images/rental-management-edit.png")}}">
            <h2 class="menu">แก้ไขพื้นที่ย่อย</h2>
            <br>
        </div>
        <div class="col-sm"  >
            <img onclick="window.location.href='{{url("organizer/management/location/create")}}'" class="img" src="{{url("assets/images/rental-management-delete.png")}}">
            <h2 class="menu">ลบพื้นที่</h2>
            <br>
        </div>
        <div class="col-sm" ><img class="img" src="{{url("assets/images/rental-management-rent.png")}}">
            <h2 class="menu">xxxxx</h2>
        </div>
        <div class="col-sm"  ><img class="img" src="{{url("assets/images/rental-management-import.png")}}">
            <h2 class="menu">xxxxxx</h2>
        </div>
        <div class="col-sm" ><img class="img" src="{{url("assets/images/rental-management-search.png")}}">
            <h2 class="menu">ค้นหารายละเอียด</h2>
        </div>
    </div>
    <div class="col-12">
        @if(session("status")=="success")
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session("status")}}!</strong> {{session("message")}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif(session("status")=="fail")
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session("status")}}!</strong> {{session("message")}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <h3>สถานที่ทั้งหมด</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อสถานที่</th>
            <th scope="col">ขนาดพื้นที่</th>
            <th scope="col">จำนวนที่ว่าง</th>
            <th scope="col">จำนวนพื่นที่ทั้งหมด</th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>

        @foreach($areas as $no => $area)
        <tr>
            <th scope="row">{{$no+1}}.</th>
            <td>{{$area->name}}</td>
            <td>{{$area->width."x".$area->height}}</td>
            <td>0</td>
            <td>0</td>
            <td>
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        จัดการ
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="{{url("organizer/management/location/edit/".$area->id)}}">แก้ไข</a>
                        <a onclick="return confirm('คุณแน่ใจว่าจะลบพื้นที่?')" class="dropdown-item" href="{{url("organizer/management/location/delete/".$area->id)}}">ลบ</a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
<hr>

@endsection

