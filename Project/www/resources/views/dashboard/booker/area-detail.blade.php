@extends('layouts.dashboard.app')



@section("dashboard-content")
    <h3>พื้นที่ทั้งหมดของ {{$area->name}}</h3>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อสถานที่</th>
            <th scope="col">ขนาด</th>

            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($subAreas as $no=> $subArea)
            <tr>
                <th scope="row">{{$no+1+(($page-1)*5)}}.</th>
                <td>{{$subArea->sub_area_number}}</td>
                <td>{{$subArea->width."X".$subArea->height}}</td>
                @if($subArea->booking!=null)
                    <td>พื้นที่ไม่ว่าง</td>

                @else
                    <td><a onclick="return confirm('คุณแน่ใจหรือไม่ที่จะจองพื้นที่นี้')" href="{{url("dashboard/booking/book/".$subArea->id)}}" class="btn btn-outline-primary">จอง</a></td>

                @endif
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $subAreas->links() }}
@endsection


