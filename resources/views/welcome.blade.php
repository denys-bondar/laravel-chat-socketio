<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel and socket.io</title>
     </head>
    <body>

<ul id="list"></ul>

    <hr>
    <form action="">
        <textarea style="widows: 100%; height: 50px;"></textarea>
        <input type="submit" value="send">
    </form>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.4/socket.io.js"></script>

    <script>
        var socket = io(':6001');
        socket.on('message', function(data){
            console.log('from server:', data)
        });

        socket.on('server-info', function(data){
            console.log('from server:', data)
        });

        function appendMessage(data)
        {
            var ul = document.getElementById("list");
            var li = document.createElement("li");
            li.appendChild(document.createTextNode(data.message));
            ul.appendChild(li);

        }

        $('form').on('submit', function () {
            var text = $('textarea').val(),
                msg = {message: text};

            socket.send(msg);
            appendMessage(msg);

            $('textarea').val('');
            return false;
        });

    </script>

    </body>
</html>
