@extends("master")
@section('content')


    <div class="products">
    @foreach($products as $product)

        <div class="product-container">

            <img src="../storage/{{$product['image']}}" alt="">
            <p class="product-name">{{$product['name']}}</p> 
            <p class="product-price">IDR {{$product['price']}}</p> 
            <a href="/product/{{$product['id']}}" class="view-product-btn">View product</a>
        </div>
    @endforeach
    </div>
    <div class="products-pagination">
    {{$products->links()}}
    </div>

@endsection