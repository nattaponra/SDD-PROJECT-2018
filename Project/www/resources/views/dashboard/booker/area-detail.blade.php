@extends('layouts.dashboard.app')



@section("dashboard-content")
    <h3>พื้นที่ทั้งหมดของ {{$area->name}}</h3>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อสถานที่</th>
            <th scope="col">สถานะ</th>

            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($subAreas as $no=>$subArea)
            <tr>
                <th scope="row">{{$no+1+(($page-1)*5)}}.</th>
                <td>{{$subArea->sub_area_number}}</td>
                <td>Otto</td>

                <td><a onclick="return confirm('คุณแน่ใจหรือไม่ที่จะจองพื้นที่นี้')" href="{{url("dashboard/booking/book/".$subArea->id)}}" class="btn btn-outline-primary">จอง</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $subAreas->links() }}
@endsection


