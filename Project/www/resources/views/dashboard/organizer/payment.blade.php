@extends('layouts.dashboard.app')



@section("dashboard-content")
<h3>ประวัติการชำระเงิน</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">วันที่ชำระ</th>
      <th scope="col">รายการชำระ</th>
      <th scope="col">ยอดชำระ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($paymentHistories as $no=> $paymentHistory)
    <tr>
      <th scope="row">{{$no+1}}.</th>
      <td>{{$paymentHistory->created_at}}</td>
      <td>{{Auth::user()->user_type==2?"ชำระค่าบริการสำหรับผู้จัดงาน":"ชำระค่าบริการสำหรับผู้จองพื้นที่"}}</td>
      <td>{{Auth::user()->user_type==2?"15,000":"1,000"}} บาท</td>
    </tr>
  @endforeach
   
  </tbody>
</table>
@endsection

