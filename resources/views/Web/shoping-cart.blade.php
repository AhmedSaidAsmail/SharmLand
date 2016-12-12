@extends('Web.Layouts.master')

@section('content')
<div id="insider">

    <div class="main-box">
        <div id="booking_method">
            <div id="stst"> <span>Add to cart</span></div>
            <div id="sec"> <span>Review order</span></div>
            <div id="rd"> <span>Secure checkout</span></div>
        </div>
        <div id="list_refrence">
            <div class="left">
                <h1>Review your order</h1>
                <div> Items in cart: {{Session::has('cart')?Session::get('cart')->totalQty:0}}</div>
            </div>
            <div class="right">
                <div> Current cart total </div>
                <h1><span>&euro;</span>{{$total}}</h1>
            </div>
        </div>
        <div id="trip_listing">
            @if (isset($items))
            @foreach ($items as $key=>$item)
            <div id="trip_item">
                <div class="left">
                    <h1>{{App\MyModels\Admin\Item::find($key)->title}} </h1>
                    <div class="img"> <img src="{{asset('images/items/thumb/'.App\MyModels\Admin\Item::find($key)->img)}}" /> </div>
                    <div class="text">
                        <div> <span>Travel date:</span> {{$item['date']}}</div>
                        <div> <span>Number of Adult:</span> {{$item['st_no']}}</div>
                        <div> <span>Number of Child:</span> {{$item['sec_no']}}</div>
                        <a href="{{route('remove.from.cart',['id'=>$key])}}" id="remove-cart-item"><i class="fa fa-trash" aria-hidden="true"></i>Remove</a>
                    </div>
                </div>
                <div class="right">
                    <h1><span>&euro;</span>{{$item['price']}}</h1>
                </div>
            </div>
            @endforeach
            @endif

        </div>
        <div id="listing_next">
            <div class="left"> <a href="index.php">Continue shopping</a></div>
            <div class="right"> <a href="bookinglist.php?book=true"> <img src="images/proceed2checkout.png" /></a></div>
        </div>
    </div>

</div>

@endsection


