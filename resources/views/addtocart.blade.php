@extends('master')
@section('content')
    <div class="product-detail-container">

        <img src="../storage/{{$product['image']}}" alt="">
        <div class="product-detail-content">
            <form action="/addtocart" method="post">
            @csrf
            <input type="hidden" name="pid" value="{{$product->id}}">
            
            <p class="product-detail-name">{{$product->name}}</p>
            <hr>
            <div class="product-detail-price-container">
                <a>Price :</a> <a class="product-detail-price">IDR. {{$product->price}}</a>
            </div>
            <hr>
            <div class="product-detail-desc">
                Description : {{$product->description}}
            </div>
            
                <div class="add-cart-qty-container">
                Quantity: <input type="number" name="qty" id="" class="qty-counter" min="1" value=1>
                </div>
                <input type="submit" class="product-detail-add-to-cart-btn" value="Add To Cart">
            </form>
        </div>
    </div>
@endsection