<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('header')
        <title>Dashboard</title>
               
    </head>
    <body>
        @include('navigators.navigatorsup')
        dashboard
    </body>
</html>
