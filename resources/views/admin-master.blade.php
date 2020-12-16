<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$okopedia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <script src="/js/app.js"></script>
</head>
<body>
    
    <div class="admin-header">
        <a href="/home" class="logo">$okopedia</a>
        <a href="/admin" class="logo">Admin</a> &nbsp; &nbsp;

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/add-product">Add Product</a>
                <a class="dropdown-item" href="/list-product">List Product</a>
            </div>
        </div>

        &nbsp; &nbsp;

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/add-category">Add Category</a>
                <a class="dropdown-item" href="/list-category">List Category</a>
            </div>
        </div>

        &nbsp; &nbsp;
        
        <a href="{{ route('logout') }}" style="color: red">Logout</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
