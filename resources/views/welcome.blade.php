<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel and socket.io</title>
     </head>
    <body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.4/socket.io.js"></script>

    <script>
        var socket = io(':6001');
        socket.on('message', function(data){
            console.log('from server:', data)

        })
    </script>

    </body>
</html>
