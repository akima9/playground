<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PlayGround</title>
    </head>
    <body>
        <h1>Index page.</h1>
        <a href="/admin/singingrooms/create">create singingroom(TEMP)</a>
        @foreach ($singingrooms as $room)
            <a href="/singingrooms/{{$room->id}}">
                <p>{{$room->name}}</p>
            </a>
        @endforeach
    </body>
</html>
