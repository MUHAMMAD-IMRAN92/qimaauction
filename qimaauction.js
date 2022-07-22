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
let port = 5002;

//app.use(express.static('public'));
app.use(cors());
var server = https.createServer(options, app);
const io = require('socket.io')(server, {
    cors: {
        origin: '*'
    }
});
// var io = require('socket.io')(http);
let clients = 0
//const io = socket(server);
var sockets = {};
var arr = [];
io.on('connection', function (socket) {
    // socket.on('message_get', function (data) {
    // io.emit('message_send', { 'singleBidammount': singleBidammount,'singleidcid': singleidcid,'singlebidpid': singlebidpid,'singlebidaid': singlebidaid,'singlebidmsterpId': singlebidmsterpId});
    // });

    socket.on('auto_bid_updates', function (data) {
        io.emit('auto_bid_updates', { "latestAutoBidId":data.latestAutoBidId,"bidID":data.bidID,"autobidamount":data.autobidamount,"id":data.id,"user_id":data.user_id  });
     });
     socket.on('auto_bid_delete', function (data) {
        io.emit('auto_bid_delete', { "autobidamount":data.autobidamount,"auction_product_id":data.auction_product_id});
     });
    socket.on('add_bid_updates', function (data) {
     io.emit('add_bid_updates', {
         "bidderID":data.bidderID,"bidderLiablity":data.bidderLiablity,"autobidUserID":data.autobidUserID,
         "singleBidammounttesting":data.singleBidammounttesting,
         "bidID":data.bidID,"paddleNo":data.paddleNo,
         "increment":data.increment,"nextIncrement":data.nextIncrement,
         "outbidresponse":data.outbidresponse,"userID":data.userID,"userBidAmount":data.userBidAmount,"winningBidder":data.winningBidder,"latestSingleBidUser":data.latestSingleBidUser,"bidAmountUser":data.bidAmountUser,"liabiltyUser":data.liabiltyUser,"checkTimer":data.checkTimer,"liability":data.liability,"checkStartTimer":data.checkStartTimer,});
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

