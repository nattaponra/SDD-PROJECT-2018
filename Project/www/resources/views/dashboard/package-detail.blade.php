@extends('layouts.dashboard.app')



@section("dashboard-content")
    <style>
        .display-4{
            font-size: 25px;
        }
    </style>
    <h4 class="mb-3"></h4>

    {{--<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">--}}
        {{--<h2 class="display-4">อะไรคือสิ่งที่คุณมองหา?</h2>--}}
        {{--<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>--}}
    {{--</div>--}}

    <div class="container">
        <div class="card-deck mb-3 text-center">
        @if($type==2)
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">อัพเกรดบัญชีสำหรับผู้ต้องการจัดงาน</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">15,000 <small class="text-muted">/ 3 เดือน</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>สามารถสร้างแบบจำลองถานที่ได้</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="{{url("/dashboard/payment/organizer")}}" class="btn btn-lg btn-block btn-primary">อัพเกรด</a>
                </div>
            </div>
        @elseif($type==3)
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">อัพเกรดบัญชีสำหรับผู้ต้องการสำรองพื้นที่</h4>
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>สามารถสร้างแบบจำลองถานที่ได้</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <a href="{{url("/dashboard/payment/book")}}" class="btn btn-lg btn-block btn-primary">อัพเกรด</a>
                    </div>
                </div>
        @endif
        </div>


    </div>


@endsection


