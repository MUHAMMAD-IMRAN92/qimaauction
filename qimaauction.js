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

socket.on('add_bid_updates', function (data) {
    io.emit('add_bid_updates', { "singleBidammounttesting":data.singleBidammounttesting,"bidID":data.bidID,"paddleNo":data.paddleNo,"increment":data.increment,"nextIncrement":data.nextIncrement,"outbidresponse":data.outbidresponse,"autobidUserID":data.autobidUserID,"bidderLiablity":data.bidderLiablity,"bidderID":data.bidderID,"bidderMaxBid":data.bidderMaxBid,});
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
////

//
// var https = require('https');
// var fs = require('fs');
// var express = require('express');
// var options = {
// key: fs.readFileSync('/etc/letsencrypt/live/templeoracle.site/privkey.pem'),
// cert: fs.readFileSync('/etc/letsencrypt/live/templeoracle.site/fullchain.pem'),
// requestCert: false,
// rejectUnauthorized: false
// };
// const app = express();
// app.use(function (req, res, next) {

// // Website you wish to allow to connect
// res.setHeader('Access-Control-Allow-Origin', 'https://templeoracle.site');

// // Request methods you wish to allow
// res.setHeader('Access-Control-Allow-Methods', '*');

// // Request headers you wish to allow
// res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

// app.get('/', function (req, res) {
// res.send('Working fine New');
// });
// var sockets = {};
// var arr = [];
// io.on('connection', function (socket) {
// socket.on('add_bid_changes', function (data) {
// io.emit('get_bid_change', { 'singleBidammount': data.singleBidammount,'singleidcid': data.singleidcid,'singlebidpid': singlebidpid,'singlebidaid': singlebidaid,'singlebidmsterpId': singlebidmsterpId});
// });

// socket.on('phoneTemple_notification_trigers', function (data) {
// io.emit('phoneTemple_notification_trigers', { 'trigerTime': data.trigerTime});
// });

// socket.on('phoneTemple_live_status_balancer', function (data) {
// 	console.log(data.operatorID);
// });

// socket.on('disconnect', function () {
// if (sockets[socket.id] != undefined) {
// mydb.releaseRequest(sockets[socket.id].user_id).then(function (result) {
// console.log('disconected: ' + sockets[socket.id].request_id);
// io.emit('request-released', {
// 'request_id': sockets[socket.id].request_id
// });
// delete sockets[socket.id];
// });
// }
// });
// });

// http.listen(5002, function () {
// console.log('listening on *:5002');
// });
////

//
// var https = require('https');
// var fs = require('fs');
// var express = require('express');
// var options = {
// key: fs.readFileSync('/etc/letsencrypt/live/phonetemple.site/privkey.pem'),
// cert: fs.readFileSync('/etc/letsencrypt/live/phonetemple.site/fullchain.pem'),
// requestCert: false,
// rejectUnauthorized: false
// };
// const app = express();
// app.use(function (req, res, next) {

// // Website you wish to allow to connect
// res.setHeader('Access-Control-Allow-Origin', 'https://phonetemple.site');

// // Request methods you wish to allow
// res.setHeader('Access-Control-Allow-Methods', '*');

// // Request headers you wish to allow
// res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

// // Set to true if you need the website to include cookies in the requests sent
// // to the API (e.g. in case you use sessions)
// res.setHeader('Access-Control-Allow-Credentials', true);

// // Pass to next layer of middleware
// next();
// });

// //const express = require('express');
// //const http = require('http');
// const socket = require('socket.io');
// const cors = require('cors');
// //const app = express();
// let port = process.env.PORT || 5002;

// //app.use(express.static('public'));
// app.use(cors());
// //const server = app.listen(4000, ()=> console.log("Listening at http://localhost:4000"));
// // const server = app.listen(port, function(){
// // console.log('listening on', port);
// // });
// var server = https.createServer(options, app);
// let clients = 0
// const io = socket(server);
// var sockets = {};
// var arr = [];
// io.on('connection', function (socket) {
// // phoneTemple
// socket.on('add_request_from_admin', function (data) {
// io.emit('get_request_from_admin', { 'opratorID': data.opratorID,'statustitle': data.statustitle,'statusclass': data.statusclass,'usercustomstatus': data.usercustomstatus,'useronlineofflinestatus': data.useronlineofflinestatus});
// });
// // for notifications
// socket.on('phoneTemple_notification_trigers', function (data) {
// io.emit('phoneTemple_notification_trigers', { 'trigerTime': data.trigerTime});
// });

// socket.on('disconnect', function () {
// if (sockets[socket.id] != undefined) {
// mydb.releaseRequest(sockets[socket.id].user_id).then(function (result) {
// console.log('disconected: ' + sockets[socket.id].request_id);
// io.emit('request-released', {
// 'request_id': sockets[socket.id].request_id
// });
// delete sockets[socket.id];
// });
// }
// });
// })
// server.listen(port, function () {
// console.log('Express server listening on port ' + server.address().port);
// });
