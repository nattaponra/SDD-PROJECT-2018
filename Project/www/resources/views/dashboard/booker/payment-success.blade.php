@extends('layouts.dashboard.app')



@section("dashboard-content")

    <h4 class="mb-3"></h4>
    <div class="jumbotron">
        <h2 class="display-4" style="font-size: 40px;"><img style="width: 40px;" src="https://image.flaticon.com/icons/svg/291/291201.svg"> การชำระเงินสำเร็จ</h2>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">

        <a class="btn btn-primary btn-lg" href="{{url("/dashboard/my-booking")}}" role="button">กลับไปยังหน้าพื้นที่ของฉัน</a>
    </div>

@endsection


