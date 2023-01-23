var request = require('request'),
    io = require('socket.io')(6001, {
        cors: {
            origin: '*',
        }
    }),
Redis = require('ioredis'),
redis = new Redis();

io.on('connection', function(socket) {
    console.log('New connection', socket.id);

    // //send msg
    // socket.send('msg from server');
    //
    // //Fire event
    // socket.emit('server-info', {version: .1 });
    //
    //
    // //join to room
    // socket.join('vip', function (error){
    //     console.log(socket.rooms)
    // });

    // socket.on('message', function(data) {
    //     socket.broadcast.send(data);
    //
    // });


    socket.on('message', function (data) {
        console.log(data);
        io.sockets.send(data);

    });

})
