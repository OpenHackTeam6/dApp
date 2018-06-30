const fs = require('fs');
const crypto = require('crypto');

const article = fs.readFileSync("./Desktop/hello.txt");
lineArray = article.toString();

ks='¿­¼è'; //´ëÄªÅ°
const cipher = crypto.createCipher('aes-256-cbc', ks);
let result = cipher.update(lineArray, 'utf8', 'base64'); 
result += cipher.final('base64'); 
console.log(result);

const decipher = crypto.createDecipher('aes-256-cbc', ks);
let result2 = decipher.update(result, 'base64', 'utf8'); 
result2 += decipher.final('utf8'); 

console.log(result2);