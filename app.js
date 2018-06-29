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
	web3.eth.signTransaction({
		from: "0x4d742c10916d042b923ce800608da5208389dd7b",
		gas: 392972,
		gasPrice: 18000000000,
		data: '0x'+hash,
		nonce: web3.eth.getTransactionCount("0x4d742c10916d042b923ce800608da5208389dd7b")
	}, function(error, result){
		if (!error)
		{
			var rawTx = result.raw;
			web3.eth.sendRawTransaction(rawTx, function(error, result2){
				if(error){
					res.send("다른 문서의 저장이 이루어지고 있습니다. 잠시 후 다시 시도해주세요.");
				}
				else {
					res.send("문서가 블록체인에 정상적으로 저장되었습니다. 당신의 문서 번호는 " + result2 + "입니다.");
				}
			})
		}
		else
		{
			res.send("계정 잠금 해제 필요");
		}
	})	
});
app.listen(8080, function() {
    console.log('Server running at ' + hostname + ":8080");
});
