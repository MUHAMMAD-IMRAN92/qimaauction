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
// socket.on('{{env('SOCKET_PREFIX' , '')}}message_get', function (data) {
// io.emit('{{env('SOCKET_PREFIX' , '')}}message_send', { 'singleBidammount': singleBidammount,'singleidcid': singleidcid,'singlebidpid': singlebidpid,'singlebidaid': singlebidaid,'singlebidmsterpId': singlebidmsterpId});
// });

socket.on('{{env('SOCKET_PREFIX' , '')}}auto_bid_updates', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}auto_bid_updates', { "loser":data.loser,"paddleNo": data.paddleNo,"latestAutoBidId":data.latestAutoBidId,"bidID":data.bidID,"autobidamount":data.autobidamount,"id":data.id,"user_id":data.user_id,"totalAutoBidLiability":data.totalAutoBidLiability,"outbid":data.outbid,"autobidUserID":data.autobidUserID,"bid_amountNew":data.bid_amountNew,"nextIncrement":data.nextIncrement,"liability":data.liability,"winneruser":data.winneruser,"checkTimer":data.checkTimer,"isgroup":data.isgroup,"groupUsers":data.groupUsers,"groupPaddleNo":data.groupPaddleNo});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}auto_bid_delete', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}auto_bid_delete', { "autobidamount":data.autobidamount,"auction_product_id":data.auction_product_id});
 });
socket.on('{{env('SOCKET_PREFIX' , '')}}add_bid_updates', function (data) {
 io.emit('{{env('SOCKET_PREFIX' , '')}}add_bid_updates', {
     "loser":data.loser,
     "bidderID":data.bidderID,"bidderLiablity":data.bidderLiablity,"autobidUserID":data.autobidUserID,
     "singleBidammounttesting":data.singleBidammounttesting,
     "bidID":data.bidID,"paddleNo":data.paddleNo,
     "increment":data.increment,"nextIncrement":data.nextIncrement,
     "outbidresponse":data.outbidresponse,"userID":data.userID,"userBidAmount":data.userBidAmount,"winningBidder":data.winningBidder,"latestSingleBidUser":data.latestSingleBidUser,"bidAmountUser":data.bidAmountUser,"liabiltyUser":data.liabiltyUser,"checkTimer":data.checkTimer,"liability":data.liability,"checkStartTimer":data.checkStartTimer,"finaltotalliability":data.finaltotalliability,"isgroup":data.isgroup,"groupusers":data.groupusers});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}auto_bid_update_user_amount', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}auto_bid_update_user_amount', { "autobidamount":data.autobidamount,"id":data.id,"user_id":data.user_id});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}add_auction_status', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}add_auction_status', { "auctionstatus":data.auctionstatus});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}publish_winner', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}publish_winner', { "publish_winner": 1 });
});
 socket.on('{{env('SOCKET_PREFIX' , '')}}add_timer_reset', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}add_timer_reset', { "timerreset":data.timerreset});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}add_groupbid_updates', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}add_groupbid_updates', { "offersdata":data.offersdata,"adminofferData":data.adminofferData});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}auction_timer', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}auction_timer', { "minutes":data.minutes,"seconds":data.seconds});
 });
 socket.on('{{env('SOCKET_PREFIX' , '')}}end_of_auction_timer', function (data) {
    io.emit('{{env('SOCKET_PREFIX' , '')}}end_of_auction_timer', { "timer": data.timer });
});
socket.on('{{env('SOCKET_PREFIX' , '')}}disconnect', function () {
if (sockets[socket.id] != undefined) {
    mydb.releaseRequest(sockets[socket.id].user_id).then(function (result) {
    console.log('disconected: ' + sockets[socket.id].request_id);
    io.emit('{{env('SOCKET_PREFIX' , '')}}request-released', {
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
