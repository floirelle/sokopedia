@extends("master")
@section('content')

    
    <div class="products">
    @foreach($products as $product)
        
        @php
        $isGuest = '';
        if(Auth::check() && Auth::user()->role == "Member") $isGuest = "href=product/".$product['id'];
        @endphp
        <div class="product-container">

            <!-- <img src="../storage/{{$product['image']}}" alt=""> -->
            <img src="../storage/{{$product['image']}}" alt="">
            <p class="product-name">{{$product['name']}}</p> 
            <p class="product-price">IDR {{$product['price']}}</p> 
            
            
            <a class="view-product-btn"  {{$isGuest}}>View product</a>
            
            
            
        </div>
    @endforeach
    </div>
    <div class="products-pagination">
    {{$products->links()}}
    </div>

@endsection