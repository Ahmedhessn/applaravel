<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
         <link rel="stylesheet" href={{url("css/style.css")}}>

    </head>
   <body>
    <div>
        <nav>
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.about')}}">About Me</a>
            <a href="{{route('home.contact')}}">Contact Me</a>
            <a href="{{route('phones.index')}}">Phones</a>
            <a href="{{route('phones.create')}}">Create</a>
        </nav>
        <br><br><br>
        <div class="divheader">@yield('header')</div>
        <br><br><br>
<center>
    <div >
    @yield('content')
    </div>
</center>
    </div>
    </body>
</html>
