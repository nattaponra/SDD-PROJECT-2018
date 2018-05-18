@extends('layouts.app')


@section("content")

    <div class="card mb-3">
        <img class="card-img-top"  src="{{url("image/area/".$area->id)}}"   style="  width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22769%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20769%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1631cf0b53d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A38pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1631cf0b53d%22%3E%3Crect%20width%3D%22769%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22287.3125%22%20y%3D%22107.1%22%3E769x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        <div class="card-body">
            <h5 class="card-title">{{$area->name}}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อบูท</th>
            <th scope="col">หมายเลขบูท</th>


        </tr>
        </thead>
        <tbody>
        @foreach($subAreas as $no=> $subArea)
            <tr>
                <th scope="row">{{$no+1 }}.</th>
                @if($subArea->store["name"]!="")
                  <td>
                      <img style="width: 50px;" src="{{url("image/store/".$subArea->store["id"])}}">
                      {{$subArea->store["name"]}}
                  </td>
                @else
                    <td>ว่าง</td>
                @endif

                <td>{{$subArea->sub_area_number}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection