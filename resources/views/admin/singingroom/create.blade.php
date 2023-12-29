<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PlayGround Admin</title>
    </head>
    <body>
        <h1>Admin Singingroom create page.</h1>
        <form method="POST" action="{{route('singingrooms.store')}}">
            @csrf
            <input type="text" name="name" value="TEST Singingroom 01">
            <input type="text" name="roomCount" value="3">
            <input type="text" name="startTime" value="12:00">
            <input type="text" name="endTime" value="03:00">
            <input type="submit">
        </form>
    </body>
</html>
