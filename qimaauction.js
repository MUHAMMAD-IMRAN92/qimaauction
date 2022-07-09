//var app = require('express')();
//var http = require('http').Server(app);
//var io = require('socket.io')(http);
//// var db = require('./db.js');
//// var mydb = new db();
//
//app.get('/', function (req, res) {
//    res.send('Working fine New');
//});
//var sockets = {};
//var arr = [];
//io.on('connection', function (socket) {
//// socket.on('message_get', function (data) {
//// io.emit('message_send', { 'singleBidammount': singleBidammount,'singleidcid': singleidcid,'singlebidpid': singlebidpid,'singlebidaid': singlebidaid,'singlebidmsterpId': singlebidmsterpId});
//// });
//
//    socket.on('add_bid_updates', function (data) {
//        io.emit('add_bid_updates', {"singleBidammounttesting": data.singleBidammounttesting, "bidID": data.bidID, "paddleNo": data.paddleNo, "increment": data.increment, "nextIncrement": data.nextIncrement, "outbidresponse": data.outbidresponse, "userID": data.userID, });
//    });
//    socket.on('disconnect', function () {
//        if (sockets[socket.id] != undefined) {
//            mydb.releaseRequest(sockets[socket.id].user_id).then(function (result) {
//                console.log('disconected: ' + sockets[socket.id].request_id);
//                io.emit('request-released', {
//                    'request_id': sockets[socket.id].request_id
//                });
//                delete sockets[socket.id];
//            });
//        }
//    });
//});
//
//http.listen(5002, function () {
//    console.log('listening on *:5002');
//});
////

//
var https = require('https');
var fs = require('fs');
var express = require('express');
var options = {
    key: fs.readFileSync('/etc/letsencrypt/live/sockets.skylinxtech.com/privkey.pem'),
    cert: fs.readFileSync('/etc/letsencrypt/live/sockets.skylinxtech.com/fullchain.pem'),
    requestCert: false,
    rejectUnauthorized: false
};
const app = express();
app.use(function (req, res, next) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');
    res.setHeader('Access-Control-Allow-Credentials', true);
    next();
});
//const socket = require('socket.io');

const cors = require('cors');
//const app = express();
let port = 5003;

//app.use(express.static('public'));
app.use(cors());
var server = https.createServer(options, app);
const io = require('socket.io')(server, {
    cors: {
        origin: '*'
    }
});
let clients = 0
//const io = socket(server);
var sockets = {};
var arr = [];
io.on('connection', function (socket) {
    socket.on('add_bid_updates', function (data) {
        io.emit('add_bid_updates', {"singleBidammounttesting": data.singleBidammounttesting, "bidID": data.bidID, "paddleNo": data.paddleNo, "increment": data.increment, "nextIncrement": data.nextIncrement, "outbidresponse": data.outbidresponse, "userID": data.userID, });
    });
    socket.on('disconnect', function () {
        if (sockets[socket.id] != undefined) {
            mydb.releaseRequest(sockets[socket.id].user_id).then(function (result) {
                console.log('disconected: ' + sockets[socket.id].request_id);
                io.emit('request-released', {
                    'request_id': sockets[socket.id].request_id
                });
                delete sockets[socket.id];
            });
        }
    });
});
server.listen(port, function () {
    console.log('Express server listening on port ' + server.address().port);
});