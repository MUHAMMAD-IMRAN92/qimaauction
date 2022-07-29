var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
// var db = require('./db.js');
// var mydb = new db();

app.get('/', function (req, res) {
res.send('Working fine New');
});
var sockets = {};
var arr = [];
io.on('connection', function (socket) {
// socket.on('message_get', function (data) {
// io.emit('message_send', { 'singleBidammount': singleBidammount,'singleidcid': singleidcid,'singlebidpid': singlebidpid,'singlebidaid': singlebidaid,'singlebidmsterpId': singlebidmsterpId});
// });

socket.on('auto_bid_updates', function (data) {
    io.emit('auto_bid_updates', { "latestAutoBidId":data.latestAutoBidId,"bidID":data.bidID,"autobidamount":data.autobidamount,"id":data.id,"user_id":data.user_id,"totalAutoBidLiability":data.totalAutoBidLiability,"outbid":data.outbid,"autobidUserID":data.autobidUserID  });
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
     "outbidresponse":data.outbidresponse,"userID":data.userID,"userBidAmount":data.userBidAmount,"winningBidder":data.winningBidder,"latestSingleBidUser":data.latestSingleBidUser,"bidAmountUser":data.bidAmountUser,"liabiltyUser":data.liabiltyUser,"checkTimer":data.checkTimer,"liability":data.liability,"checkStartTimer":data.checkStartTimer,"finaltotalliability":data.finaltotalliability});
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

http.listen(5002, function () {
console.log('listening on *:5002');
});
