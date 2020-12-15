@extends("admin-master")
@section('content')
    <center> <h1> List Product </h1> </center>
    <div class="admin-list-product">
        <table class="table table-striped table-bordered table-hover" id="postTable">
            <thead>
                <tr>
                    <th valign="middle">ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{ csrf_field() }}
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img src="../storage/{{$product->image}}" alt="" height='100px' width='100px'> </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}} </td>
                        <form action="/delete-product/{{$product->id}}" method="delete">
                            <td>
                                <button class="delete-modal btn btn-danger" data-id="{{$product->id}}">
                                <span class="glyphicon glyphicon-trash"></span> Delete</button>
                            </td>
                        </form>     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection