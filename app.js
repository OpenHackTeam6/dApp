var web3 = require('web3');
var request = require('request');
var express = require('express');
var bodyParser = require('body-parser');
var fs = require('fs');
var Tx = require('ethereumjs-tx');

var app = express();
var hostname = "http://127.0.0.1";

var web3 = new web3(new web3.providers.HttpProvider('http://localhost:8545'));

app.use(bodyParser.urlencoded({ extended: false }));

app.get('/',function(req,res){
    fs.readFile('index.html',function(error,data){
        res.writeHead(200,{'Content-Type':'text/html'});
        res.end(data);
    });
});

app.post("/action", function(req, res) {
    var article = fs.readFileSync("./hello.txt");
	lineArray = article.toString();
	var secret = 'abcdefg';
	var hash = crypto.createHmac('sha256', secret).update(lineArray).digest('hex');
});

app.listen(8080, function() {
    console.log('Server running at ' + hostname + ":8080");
});
