var web3 = require('web3');
var request = require('request');
var express = require('express');
var bodyParser = require('body-parser');
var fs = require('fs');
var Tx = require('ethereumjs-tx');
var crypto = require('crypto');

var app = express();
var hostname = "http://127.0.0.1";

var web3 = new web3(new web3.providers.HttpProvider('http://localhost:8545'));

app.use(bodyParser.urlencoded({ extended: false }));
app.get('/',function(req,res){
    fs.readFile('moniter.html',function(error,data){
        res.writeHead(200,{'Content-Type':'text/html'});
        res.end(data);
    });
});
app.post('/action', function(req, res) {
        var article = req.body.userfile;
        var article = fs.readFileSync(`./${article}`).toString();
        console.log(article);
		lineArray = article;
		var secret = 'abcdefg';
		var fileHash = crypto.createHmac('sha256', secret).update(lineArray).digest('hex');
        var originHash = web3.eth.getTransaction("0x"+req.body.txid).input;
        var home = "<h2> 확인 결과 </h2>"
        var text1 = "업로드 한 문서의 Hash 값 : " + "0x"+fileHash + "<br><br>";
        var text2 = "블록체인에 저장된 원본 Hash 값 : "+ originHash + "<br><br>";
        var text3 = "<h3>위변조 검사 결과 : 정상</h3>"
        var text4 = "<h3>위변조 검사 결과 : 변조됨</h3>"
        if(originHash==("0x"+fileHash))
        {
            res.send(home+text1+text2+text3);
        }
        else
        {
            res.send(home+text1+text2+text4);
        }
});

app.listen(8080, function() {
    console.log('Server running at ' + hostname + ":8080");
});
