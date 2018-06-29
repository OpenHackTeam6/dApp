## 이더리움을 이용한 문서 발급 및 전송

### About project
기존 민원24 시스템은 발급은 가능하지만 사용자가 원하는 기관에 자동으로 문서를 제출할 수는 없습니다.<br>
문서를 온라인으로 보낼 경우 위변조의 위험성이 존재하여 직접 방문하여 제출해야 하는 불편함이 있습니다.<br>
우리는 아래 2가지 기능 구현을 통해서 문서의 무결성 보장 및 문서 발급과 전송에 대한 편리성을 드리고자 합니다.<br><br>
1. 사용자임을 확인할 수 있는 비밀키를 입력하면 사용자가 원하는 문서를 공공기관에서 등본 등의 문서를 발급 받아 이더리움에 저장한 후, 공공기관은 사용자가 원하는 대상 기관에게 RSA+AES알고리즘을 사용해서 발급받은 문서 발송

2. 대상 기관에서는 RSA로 암호화된 대칭키를 복호화한 후 대칭키를 사용해서 AES로 암호화된 문서를 복호화. 그런 다음 평문을 SHA-256을 사용해서 암호화한 후 블록체인에 저장되어 있는 문서의 해시정보와 비교. 본 과정을 통해서 문서의 무결성 검증.


### Installation Geth in Linux

    sudo apt-get install software-properties-common
    sudo add-apt-repository -y ppa:ethereum/ethereum
    sudo apt-get update
    sudo apt-get install ethereum

### Operate Geth in Console

    geth --networkid "YOUR_NETWORK_ID" --rpc --rpcaddr "localhost" --rpcport 8545 --rpccorsdomain "*"
    --rpcapi "eth,web3,personal" --datadir "YOUR_DATA_DIRECTORY" console
    
### Add Peer in Your Private Network

    admin.addPeer("enode://0790f4f2d9f6.....YOUR_ENODE......6063d3f@YOUR_IP_ADDRESS:30303")

### Sign Your Own Transaction

    eth.signTransaction({
        from: "YOUR_ACCOUNT_IN_HEX",
        gas: 400000,
        gasPrice: 18000000000,
        data: "YOUR_DATA_IN_HEX"
        nonce: eth.getTransactionCount("YOUR_ACCOUNT_IN_HEX")+eth.pendingTransactions.length
    })

### Team Member
디자이너 이영진<br>
개발자 소현섭<br>
개발자 권혁민<br>
개발자 강성욱<br>
개발자 임준수<br>
### License
```
MIT License

Copyright (c) 2018 Openhack_Team6

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
to deal in the Software without restriction, including without limitation the rights to use, 
copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```
