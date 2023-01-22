var request = require('request'),
    io = require('socket.io')(6001, {
        cors: {
            origin: '*',
        }
    }),
Redis = require('ioredis'),
redis = new Redis();

io.on('connection', function() {
    console.log('New connection');
})
