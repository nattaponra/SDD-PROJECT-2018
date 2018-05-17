@extends('layouts.dashboard.app')



@section("dashboard-content")
    <h3>สร้างร้านค้า/บูทของคุณ  </h3>
    {!! Form::open(['method'=>'post','enctype'=>"multipart/form-data"  ]) !!}

        <div class="form-group">
            <label for="exampleInputEmail1">ชื่อร้านค้า/บูท</label>
            <input type="text" name="name" class="form-control"   aria-describedby="emailHelp" placeholder=" " required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ภาพโลโก้</label>
            <input type="file" name="logo" class="form-control"   aria-describedby="emailHelp" placeholder=" " required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">ประเภทร้านค้า</label>
            <input type="text" name="type" class="form-control" id="exampleInputPassword1" placeholder=" " required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


