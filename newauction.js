var app = require('express')();
var http = require('http').Server(app);
const https = require('https');
const fs = require('fs');
//var privateKey  = fs.readFileSync('socket.key', 'utf8');
// key: fs.readFileSync('/etc/letsencrypt/live/sockets.skylinxtech.com/privkey.pem'),
//    cert: fs.readFileSync('/etc/letsencrypt/live/sockets.skylinxtech.com/fullchain.pem'),
// /etc/letsencrypt/live/bestofyemenauction.com/fullchain.pem
// SSLCertificateKeyFile /etc/letsencrypt/live/bestofyemenauction.com/privkey.pem
var privateKey  = fs.readFileSync('/etc/letsencrypt/live/bestofyemenauction.com/privkey.pem', 'utf8');
//var certificate = fs.readFileSync('socket.crt', 'utf8');
var certificate = fs.readFileSync('/etc/letsencrypt/live/bestofyemenauction.com/fullchain.pem', 'utf8');
var credentials = {key: privateKey, cert: certificate};
var httpsServer = https.Server(credentials, app);

const options = {
//  key: fs.readFileSync('key.pem'),
//  cert: fs.readFileSync('cert.pem')
};
var io = require('socket.io')(httpsServer);
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
    io.emit('auto_bid_updates', { "loser":data.loser,"paddleNo": data.paddleNo,"latestAutoBidId":data.latestAutoBidId,"bidID":data.bidID,"autobidamount":data.autobidamount,"id":data.id,"user_id":data.user_id,"totalAutoBidLiability":data.totalAutoBidLiability,"outbid":data.outbid,"autobidUserID":data.autobidUserID,"bid_amountNew":data.bid_amountNew,"nextIncrement":data.nextIncrement,"liability":data.liability});
 });
 socket.on('auto_bid_delete', function (data) {
    io.emit('auto_bid_delete', { "autobidamount":data.autobidamount,"auction_product_id":data.auction_product_id});
 });
socket.on('add_bid_updates', function (data) { 
 io.emit('add_bid_updates', {
     "loser":data.loser,
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

httpsServer.listen(5002, function () {
console.log('listening on *:5002');
});