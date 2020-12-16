<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sokopedia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
<!--  Buat yang ada search bar nya-->
@if(isset($search))
<div class="header">
    <a href="/" class="logo">Sokopedia</a>
    <form action="/search" method="get">
        <input type="text" name="name" id="" class="search-bar" placeholder="Search">
        <input type="submit" value="search" class="search-btn">
    </form>
    <!-- change between roles -->
    @if(isset ($roles) && $roles == 'Guest')

        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @else
        <a href="/cart">Cart </a>
        <a href="/history">History </a>
        <a>{{Auth::user()->name}}</a>
        <a href="{{ route('logout') }}" style="color: red">Logout</a>
    @endif
</div>
<!-- Buat login/register yang gada if -->
@else

@endif

<div class="content">
    @yield('content')
</div>


</body>
</html>