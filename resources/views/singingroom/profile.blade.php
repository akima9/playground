<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PlayGround</title>
    </head>
    <body>
        <h1>Singingroom profile page.</h1>
        <p>ID: {{$singingroom['id']}}</p>
        <p>Name: {{$singingroom['name']}}</p>
        <p>Address: {{$singingroom['address']}}</p>
        <p>roomCount: {{$singingroom['roomCount']}}</p>
        <p>startTime: {{$singingroom['startTime']}}</p>
        <p>endTime: {{$singingroom['endTime']}}</p>
        <hr>
        @foreach ($singingroom['rooms'] as $room)
            @foreach ($room['reservation'] as $reservation)
                <p>{{$reservation}}</p>
            @endforeach
            <hr>
        @endforeach
    </body>
</html>
