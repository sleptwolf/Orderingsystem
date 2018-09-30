<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <a href="{{ route('show_orders') }}">Cook Page</a>
        <a href="{{ route('show_tables') }}">Waiter Page</a>
        <a href="{{ route('home') }}">Admin Page</a>
        
    </body>
</html>
