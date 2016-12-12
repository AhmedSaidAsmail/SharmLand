@extends('Web.Layouts.master')
@section('_extra_css')

<link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('adminlte/plugins/datepicker/datepicker3.css')}}">
@endsection
@section('content')
<div id="insider">



    <div class="main-box">
        <h3 class="exc-title">{{$item->title}}</h3>
        <img src="{{asset('images/price.png')}}" style="width: 74px; height: 36px; margin-top: 10px;" alt="" />
        <table cellpadding="0" cellspacing="0" style="font-size: 15px; color: #000; font-family: tahoma;">
            <tr>
                <td style="padding-right: 20px; color: #bf1a0c;">{{ucfirst($item->price->st_name)}} </td>
                <td>{{$item->price->st_price}} EUR</td>
            </tr>
            <tr>
                <td colspan="4" style="border-top: 1px #000 groove;"></td>
            </tr>
            <tr>
                <td style="color: #bf1a0c;">{{ucfirst($item->price->sec_name)}}</td>
                <td>{{$item->price->sec_price}}  EUR</td>
            </tr>
        </table>
                        @if(count($errors)>0)
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
        
        
        
        <div id="listing_form">
            <form action="{{route('add.to.cart',['id'=>$item->id])}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}"
                <input type="hidden" name="item_id" value="{{$item->id}}"/>
                <div class="form-group">
                    <div class="label one"> Select Travel Date</div>
                </div>
                <div class="form-group {{$errors->has('date')?'has-error':''}}">
                    <label>Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input name="date" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                    @if($errors->has('date'))
                    <span class="help-block">The Date is Required</span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="label tow"> Enter Total Number Travelers</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Adult:</label>
                            <select name="st_no" class="form-control" style="width: 100%;">
                                @for ($i=1;$i<10;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Child:</label>
                            <select name="sec_no" class="form-control" style="width: 100%;">
                                @for ($i=0;$i<10;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div id="listing_field">
                    <input  type="submit" value="" />
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
@section('_extra_js')
<!-- InputMask -->
<script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script>
$(function () {
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();
});
</script>
@endsection

