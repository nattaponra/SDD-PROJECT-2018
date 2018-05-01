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
            <img onclick="window.location.href='{{url("organizer/management/location/create")}}'" class="img" src="{{url("assets/images/rental-management-create.png")}}">
            <h2 class="menu">สร้างพื้นที่จัดงาน</h2>
            <br>
        </div>
        <div class="col-sm"  >
            <img onclick="window.location.href='{{url("/organizer/management/location/subarea")}}'" class="img" src="{{url("assets/images/rental-management-edit.png")}}">
            <h2 class="menu">แก้ไขพื้นที่จัดงาน</h2>
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

    <br>
    <h4>จัดการพื้นที่ย่อย</h4>
    <form id="area-form" method="get">
    <div class="input-group mb-12">

            {!! Form::select('area_id',$areas,null,["class"=>"form-control","required"=>"","id"=>"area_id"]) !!}

          <div class="input-group-append">
            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal"  type="button">เพิ่มพื้นที่ย่อย</button>
        </div>
    </div>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">หมายเลขพื้นที่</th>
            <th scope="col">ขนาด</th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        @if($subAreas)
        @foreach($subAreas as $subArea)
        <tr>
            <th scope="row">1</th>
            <td>{{$subArea->sub_area_number}}</td>
            <td>{{$subArea->width."X".$subArea->height}}</td>
            <td>   <a  onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบ?')" href="{{url("organizer/management/deleteSubArea/".$subArea->id)}}" class="btn btn-primary">ลบ</a> </td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
    @if(empty($subAreas))
        <tr>
            <div class="alert alert-warning" role="alert">
                ไม่พบข้อมูลพื้นที่ย่อย!
            </div>
        </tr>
    @endif
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {!! Form::open(['method'=>'post' ,'url'=>url("organizer/management/storeSubArea") ]) !!}

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มพื้นที่ย่อย</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if($area)
                        <input type="hidden" name="area_id"  value="{{$area->id}}">
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">หมายเลขพื่นที่ย่อย</label>
                            <input type="text" name="sub_area_number" class="form-control"  placeholder="เช่น A-700">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ความกว้าง</label>
                            <input type="number" name="width" class="form-control"  placeholder="ตารางเมตร">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ความยาว</label>
                            <input type="number" name="height" class="form-control"   placeholder="ตารางเมตร">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">เพิ่ม</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

