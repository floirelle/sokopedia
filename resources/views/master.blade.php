<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$okopedia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
<!--  Buat yang ada search bar nya-->

<div class="header">
    <a href="/" class="logo">$okopedia</a>
    <form action="/search" method="get">
        <input type="text" name="name" id="" class="search-bar" placeholder="Search">
        <input type="submit" value="search" class="search-btn">
    </form>
    <!-- change between roles -->
    @if(!Auth::check())

        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @else 
    @if(Auth::user()->role == "Member")
        <a href="/cart">Cart</a>
        <a href="/history">History </a>
        <a>{{Auth::user()->name}}</a>
    @endif
    <a href="{{ route('logout') }}" style="color: red">Logout</a>
    @endif
</div>
<!-- Buat login/register yang gada if -->


<div class="content">
    @yield('content')
</div>


</body>
</html>