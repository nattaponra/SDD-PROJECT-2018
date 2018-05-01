@extends('layouts.dashboard.app')



@section("dashboard-content")

    <h4 class="mb-3"></h4>
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 mx-auto">
                <div id="pay-invoice" class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">การชำระเงิน</h2>
                        </div>

                        <hr>
                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">

                        {!! Form::open(['method'=>'post'  ]) !!}

                        <div class="form-group text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label>Payment amount</label>
                            <h2>จองพื้นที่ {{$subAreas->sub_area_number}}   ราคา 1,000 บาท</h2>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label">ชื่อบนบัตรเคดิต</label>
                            <input name="cc-name" type="text" class="form-control cc-name valid"  required="">
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label">เลขบัตรเคดิต</label>
                            <input  name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number" required="">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label">วันหมดอายุ</label>
                                    <input id="cc-exp" name="cc-exp" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp" required="">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label">รหัสความปลอดภัย</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="x_card_code" type="password" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" required="">
                                    <div class="input-group-addon">
                                        <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                              data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                              data-trigger="hover"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">ชำระเงิน 1,000.00 บาท</span>

                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


