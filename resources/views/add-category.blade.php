@extends("admin-master")
@section('content')

    <div class='form-custom'>
        <form action="/store-category" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}">
                <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
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
