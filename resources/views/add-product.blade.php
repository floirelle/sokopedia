@extends("admin-master")
@section('content')

    <div class='form-custom'>
        <form action="/store-product" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}">
                <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
            </div>


            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="category" id="category" value="{{ old('category') }}">
                @foreach($categories as $category)

                    <option>{{$category['name']}}</option>
                
                @endforeach
                </select>
                <font style="color:red"> {{ $errors->has('category') ?  $errors->first('category') : '' }} </font>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" value="{{ old('description') }}"></textarea>
                <font style="color:red"> {{ $errors->has('description') ?  $errors->first('description') : '' }} </font>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter price" value="{{ old('price') }}">
                <font style="color:red"> {{ $errors->has('price') ?  $errors->first('price') : '' }} </font>
            </div>

            <div class="form-group">
                <label for="image">Image File</label>
                <input type="file" name="image" class="form-control-file" id="image">
                <font style="color:red"> {{ $errors->has('image') ?  $errors->first('image') : '' }} </font>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <br />
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </form>
    </div>

@endsection
