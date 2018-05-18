@extends('layouts.app')

@section("content")

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">ค้นหาบูทงานที่สนใจ</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">ฟรี</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>สามารถค้นหางานได้ทุกงาน</li>
                    <li>มีระบบนำทางไปยังสถานที่จัดงาน</li>

                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">สมัครสมาชิกฟรี</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">ระบบจองที่มีคุณภาพ</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">15,000 <small class="text-muted">/ เดือน</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>สามารถสร้างแบบจำลองพื้นที่ได้</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">สมัครสมาชิก</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">หาพื้นที่ออกบูท</h4>
            </div>
            <div class="card-body">
            <h1 class="card-title pricing-card-title">1,000 <small class="text-muted">/ สถานที่</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                    <li>สามารถจำลองพื้นที่ได้</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">สมัครสมาชิก</button>
            </div>
        </div>
    </div>
@endsection