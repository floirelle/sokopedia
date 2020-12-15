@extends("admin-master")
@section('content')

<div class="admin-list-product">
    <div class="accordion" id="accordion">
        @foreach ($categories as $category)
            <div class="card">
                <div class="card-header" id="headingOne">
                <center>
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{str_replace(' ', '', $category->name)}}" aria-controls="{{str_replace(' ', '', $category->name)}}">
                        {{$category->name}}
                    </button>
                </h2>
                </center>
                </div>
                
                <div id="{{str_replace(' ', '', $category->name)}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <table class="table table-striped table-bordered table-hover" id="postTable">
                        <thead>
                            <tr>
                                <th valign="middle">ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category->products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="../storage/{{$product->image}}" alt="" height='100px' width='100px'> </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</div>    

@endsection