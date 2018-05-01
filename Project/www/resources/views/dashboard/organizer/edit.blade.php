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

    <h3>แก้ไขสถานที่จัดงาน</h3>
    <div class="row">

        <div class="col-12">

            <br>
            {!! Form::model($area,['method'=>'post' ,'enctype'=>"multipart/form-data"]) !!}
            <div class="form-group">
                <label for="exampleInputEmail1">ชื่อพื้นที่</label>
                {!! Form::text('name',null,["class"=>"form-control","required"=>"","placeholder"=>"ชื่อพื้นที่"]) !!}

            </div>
            <img style="width: 200px;" src="{{$area->getUrlImage()}}">
            <hr>
            <div class="form-group">

                <label for="exampleInputEmail1">อัพโหลดแผนที่</label>
                {!! Form::file('map',null,["class"=>"form-control","required"=>"" ]) !!}

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

        </div>
    </div>
@endsection

