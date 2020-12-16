@extends('master')
@section('content')


@foreach($cart as $item)
        
        @php
        $product = $item->product;
        @endphp
        <form action="/deleteFromCart" method="post">
            @csrf
            <input type="hidden" name="cart_id" value="{{$item->id}}">
            <div class="cart-content-item">
                <img src="../storage/{{$product->image}}" alt="">
                <div class="cart-content-detail">
                    <a class="cart-content-title">{{$product->name}}</a>
                    <a class="cart-content-price">Price : IDR. {{$product->price * $item->qty}}</a>
                    <a class="cart-content-qty">Quantity : {{$item->qty}}</a>
                    <div class="cart-content-btn">
                        <input type="submit" value="Delete" class="cart-content-delete-btn">
                        <a href ="/addtocart/{{$product->id}}" class="cart-content-edit-btn">Edit</a>
                    </div>
                    
                </div>
            </div>
        </form>
        
       
@endforeach


@php
    $disabled = (count($cart) == 0)?'disabled' : "";
@endphp

<form action="/checkout" method="post">
    @csrf
    
    <input type="submit" value="Checkout" class="checkout-btn" {{$disabled}}>
</form>
@endsection