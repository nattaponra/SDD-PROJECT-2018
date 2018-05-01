@extends('layouts.dashboard.app')



@section("dashboard-content")
    <h3>พื้นที่ทั้งหมดของ  </h3>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อร้าน</th>
            <th scope="col">ชื่อสถานที่</th>
            <th scope="col">หมายเลขบูท</th>


        </tr>
        </thead>
        <tbody>
        @foreach($bookings as $no=>$booking)
            <tr>
                <th scope="row">{{$no+1+(($page-1)*5)}}.</th>
                <td><img style="width: 50px;" src="{{url("image/store/".$booking->subArea->store->id)}}"></td>
                <td>{{$booking->subArea->store->name}}</td>
                <td>{{$booking->subArea->area->name}}</td>
                <td>{{$booking->subArea->sub_area_number}}</td>


            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $bookings->links() }}
@endsection


