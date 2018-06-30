const crypto = require('crypto');
const fs = require('fs');

const article = fs.readFileSync("./Desktop/hello.txt");
lineArray = article.toString();

const secret = 'abcdefg';
const hash = crypto.createHmac('sha256', secret)
                   .update(lineArray)
                   .digest('hex');
console.log(hash);