@extends('layouts.dashboard.app')



@section("dashboard-content")

    <h4 class="mb-3">ข้อมูลส่วนตัว</h4>
    {!! Form::model($user,['method'=>'post','url' => 'dashboard/profile/'.$user->id,'class'=>'needs-validation']) !!}
    @if(session("status")=="success")
        <div class="alert alert-success">
            <strong>Success!</strong> {{session("message")}}
        </div>
    @elseif(session("status")=="fail")
        <div class="alert alert-danger">
            <strong>!</strong> {{session("message")}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">ชื่อ</label>
            {!! Form::text('first_name',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">นามสกุล</label>
            {!! Form::text('last_name',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-12 mb-12">
            <label for="lastName">รหัสบัตรประชาชน</label>
            {!! Form::text('card_id',null,["class"=>"form-control","required"=>""]) !!}
        </div>
    </div>



    <div class="mb-3">
        <label for="email">อีเมล</label>
        {!! Form::email('email',null,["class"=>"form-control","required"=>"","readonly"]) !!}
        <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
        </div>
    </div>
    <!-- <div class="mb-3">
        <label for="address">ที่อยู่</label>
        {!! Form::text('address',null,["class"=>"form-control"  ]) !!}
    </div> -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">บ้านเลขที่</label>
            {!! Form::text('house_no',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">หมู่</label>
            {!! Form::text('village_no',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">ตรอก/ซอย</label>
            {!! Form::text('lane',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">ถนน</label>
            {!! Form::text('road',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">แขวง/ตำบล</label>
            {!! Form::text('sub_area',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">เขต/ตำบล</label>
            {!! Form::text('area',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">จังหวัด</label>
            {!! Form::select('province',$provinces,null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">รหัสไปรษณีย์</label>
            {!! Form::text('postal_code',null,["class"=>"form-control" ]) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">เบอร์โทรศัพท์บ้าน</label>
            {!! Form::text('tel_home',null,["class"=>"form-control" ]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">เบอร์โทรศัพท์มือถือ</label>
            {!! Form::text('tel_mobile',null,["class"=>"form-control" ]) !!}
        </div>
    </div>








    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">อัพเดตข้อมูล</button>
    {!! Form::close() !!}

@endsection


