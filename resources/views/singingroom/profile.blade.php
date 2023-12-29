<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PlayGround</title>
    </head>
    <body>
        <h1>Singingroom profile page.</h1>
        <p>{{$singingroom}}</p>
        <p>name: {{$singingroom->name}}</p>
        <p>room count: {{$singingroom->room_count}}</p>
        <p>status: {{$singingroom->status}}</p>
    </body>
</html>
