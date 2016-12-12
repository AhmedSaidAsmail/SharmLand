@extends('Web.Layouts.master')
@section('content')
<!-- welcome -->
<div id="insider">

    <div class="box-welcome">
        <img src="images/welcome.png" />
        <div class="line"> </div>
        <p><span>If you planning to book a Holiday in Sharm El Sheikh, Egypt </span>,you&#39;ll be looking to see what kind of day trips and excursions from Sharm El Sheikh can be offered, Egypt has an amazing history, beautiful desert, fabulous beaches and distinguish people, explore sharmland website and discover the area around you in Egypt .</p>
        <div class="decorative"></div>
    </div>



    <div class="main-box">


        @foreach($Categories as $Category)
        <div class="blocks">
            <a href="{{route('cities.show',['city'=>urlencode($Category->name),'id'=>$Category->id])}}" title="{{$Category->name}}"><img alt="" src="images/sorts/thumb/{{$Category->img}}" /></a>
            <h6 class="blocks-title"><a href="{{route('cities.show',['city'=>urlencode($Category->name),'id'=>$Category->id])}}" title="Ras Mohamed By Boat"> {{$Category->name}}</a></h6>
        </div>
        @endforeach


    </div>

</div>
@endsection