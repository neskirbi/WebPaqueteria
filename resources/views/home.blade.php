<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('header')
        <title>Home</title>
        
    </head>
    <style>
    body{
        background-image:url("images/portada.png");
        background-repeat:no-repeat;
        background-size: cover;

    }
    </style>
    <body>
    @guest
    @include('navigators.navigator')
    @else
    @include('navigators.navigatorsup')
    @endguest

    </body>
</html>
