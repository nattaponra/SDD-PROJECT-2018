@extends('layouts.dashboard.app')



@section("dashboard-content")
    <h3>ค้นหาพื้นที่จัดงาน</h3>
    <form action="?" method="get">
    <div class="input-group mb-3">
        <input type="text" name="q" class="form-control"  value="{{ $q }}" placeholder="ค้นหา ชื่อ สถานที่ของงาน.." aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">ค้นหา</button>
        </div>
    </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อสถานที่</th>
            <th scope="col">จำนวนพื้นที่</th>
            <th scope="col">จำนวนพื้นที่ที่เหลือ</th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($areas as $no=>$area)
        <tr>
            <th scope="row">{{$no+1+(($page-1)*5)}}.</th>
            <td>{{$area->name}}</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a  href="{{url("dashboard/booking/detail/area/".$area->id)}}" class="btn btn-outline-primary">ดูรายละเอียด</a></td>
        </tr>
        @endforeach

        </tbody>
    </table>
    {{ $areas->links() }}
@endsection


