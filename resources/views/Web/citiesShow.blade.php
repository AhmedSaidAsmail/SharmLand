@extends('Web.Layouts.master')
@section('content')
<!-- welcome -->
<div id="insider">


    <div class="main-box">
        @foreach($Items as $Item)
        <div class="blocks">
            <h6 class="blocks-title"><a href="show.php?id=4" title="Ras Mohamed By Boat"> {{$Item->name}}</a></h6>
            <a href="{{route('tour.show',['city'=>urlencode($Item->sort->name),'tour'=>urlencode($Item->name),'id'=>$Item->id])}}" title="{{$Item->name}}">
                <img alt="" src="{{asset('images/items/thumb/'.$Item->img)}}" /></a>
            <h6 class="blocks-title2"> <a href="{{route('tour.show',['city'=>urlencode($Item->sort->name),'tour'=>urlencode($Item->name),'id'=>$Item->id])}}"><span>{{ (isset($Item->price->st_price)?$Item->price->st_price:'00') }}.00</span> GBP</a> </h6>
        </div>
        @endforeach
    </div>
</div>
@endsection