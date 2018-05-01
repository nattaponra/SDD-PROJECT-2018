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
    <h2>สร้างพื้นที่จัดงาน</h2>
<div class="row">
    <div class="col-12" align="center">
        <img   class="img-fluid" src="http://ajaxuploader.com/images/drag-drop-file-upload.png">
    </div>
    <div class="col-6">
        <br>
        <h4>ข้อมูลพื้นที่ทั้งหมด</h4>
        {!! Form::open(['method'=>'post'  ]) !!}
            <div class="form-group">
                <label for="exampleInputEmail1">ชื่อพื้นที่</label>
                {!! Form::text('name',null,["class"=>"form-control","required"=>"","placeholder"=>"ชื่อพื้นที่"]) !!}

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ที่อยู่</label>
                {!! Form::textarea('address',null,["class"=>"form-control","required"=>"","placeholder"=>"ที่อยู่","rows"=>2]) !!}

            </div>
            <div class="form-group" >
                <label for="exampleInputPassword1">ความกว้าง</label>
                {!! Form::text('width',null,["class"=>"form-control","required"=>"","placeholder"=>"ตาราเมตร"]) !!}

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ความยาว</label>
                {!! Form::text('height',null,["class"=>"form-control","required"=>"","placeholder"=>"ตาราเมตร"]) !!}
            </div>

            <button type="submit" class="btn btn-primary">บันทึก</button>
        </form>
    <br>
    </div>

    <div class="col-6">

    </div>
</div>

@endsection

