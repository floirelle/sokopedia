@extends('master')
@section('content')


@foreach($detail as $item)
        
        @php
        $product = $item->product;
        @endphp

        <div class="history-detail-content-item ">
            <img src="../storage/{{$product->image}}" alt="">
            <div class="history-detail-content-detail">
                <a class="history-detail-content-title">{{$product->name}}</a>
                <a class="history-detail-content-price">Price : IDR. {{$product->price * $item->qty}}</a>
                <a class="history-detail-content-qty">Quantity : {{$item->qty}}</a>
            </div>
        </div>
        
        
       
@endforeach



@endsection