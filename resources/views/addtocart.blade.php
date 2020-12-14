@extends('master')
@section('content')
    <div class="product-detail-container">

        <img src="../storage/{{$product['image']}}" alt="">
        <div class="product-detail-content">
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
            Quantity: <input type="number" name="qty" id="" class="qty-counter" min="0" value=0>
            </div>
            <a href="/addToCart/{{$product->id}}" class="product-detail-add-to-cart-btn">Add To Cart</a>
        </div>
    </div>
@endsection