@extends('layouts.dashboard.app')



@section("dashboard-content")

    <h4 class="mb-3">ข้อมูลส่วนตัว</h4>
    {!! Form::model($user,['method'=>'post','url' => 'foo/bar','class'=>'needs-validation']) !!}

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">ชื่อ</label>
            {!! Form::text('first_name',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">นามสกุล</label>
            {!! Form::text('last_name',null,["class"=>"form-control","required"=>""]) !!}
        </div>
    </div>



    <div class="mb-3">
        <label for="email">อีเมล</label>
        {!! Form::email('email',null,["class"=>"form-control","required"=>"","readonly"]) !!}
        <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
        </div>
    </div>
    <div class="mb-3">
        <label for="address">ที่อยู่</label>
        {!! Form::text('address',null,["class"=>"form-control","required"=>"" ]) !!}
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">บ้านเลขที่</label>
            {!! Form::text('house_no',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">หมู่</label>
            {!! Form::text('village_no',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">ตรอก/ซอย</label>
            {!! Form::text('lane',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">ถนน</label>
            {!! Form::text('road',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">แขวง/ตำบล</label>
            {!! Form::text('area',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">เขต/ตำบล</label>
            {!! Form::text('road',null,["class"=>"form-control","required"=>""]) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">เบอร์โทรศัพท์บ้าน</label>
            {!! Form::text('tel_home',null,["class"=>"form-control","required"=>""]) !!}
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">เบอร์โทรศัพท์มือถือ</label>
            {!! Form::text('tel_mobile',null,["class"=>"form-control","required"=>""]) !!}
        </div>
    </div>
    <div class="mb-3">
        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
    </div>

    <div class="row">
        <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required="">
                <option value="">Choose...</option>
                <option>United States</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid country.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required="">
                <option value="">Choose...</option>
                <option>California</option>
            </select>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required="">
            <div class="invalid-feedback">
                Zip code required.
            </div>
        </div>
    </div>
    <hr class="mb-4">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="same-address">
        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
    </div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="save-info">
        <label class="custom-control-label" for="save-info">Save this information for next time</label>
    </div>
    <hr class="mb-4">

    <h4 class="mb-3">Payment</h4>

    <div class="d-block my-3">
        <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
        </div>
        <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">PayPal</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
                Name on card is required
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
                Credit card number is required
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
                Expiration date required
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
                Security code required
            </div>
        </div>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">อัพเดตข้อมูล</button>
    {!! Form::close() !!}

@endsection


