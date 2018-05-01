@extends('layouts.dashboard.app')



@section("dashboard-content")
    <h2>สร้างพื้นที่จัดงาน</h2>
    <div class="row">
        <div class="col-7">
            <img   class="img-fluid" src="http://ajaxuploader.com/images/drag-drop-file-upload.png">
        </div>
        <div class="col-5">

            {!! Form::model($area,['method'=>'post'  ]) !!}
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
            <a href="{{url("organizer/management/location")}}" class="btn btn-primary">กลับไปยังหน้าหลัก</a>
            <button type="submit" class="btn btn-primary">บันทึก</button>
            </form>

        </div>
    </div>
@endsection

