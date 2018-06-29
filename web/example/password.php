<!doctype html>
<html>

<?php


session_start();


$_SESSION[org] = $_POST[test2];
$_SESSION[docu] = $_POST[documents];


?>



<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>비밀번호 입력</title>
  <link rel="stylesheet" href="style_all.css" />
  <style>
    #container {
      max-width: 640px;
      margin: 70px auto;
      color: black;
    }
  </style>
</head>



<body>

 <div id="header">
        <ul id="tabs" class='nav'>
          <li><a href="#i1" >기관 선택</a></li>
          <li><a href="#i2" id="navAactive">비밀번호 입력</a></li>
          <li><a href="#i3">전송</a></li>
          <li><a href="#i4">확인 및 알림</a></li>
        </ul>
</div>


  <div class="contentsContainer">
  <div class="contentsHeader">
    <h2>사용자 인증</h2>
      <p>이영진님의
<?php

if(isset($_SESSION['docu'])){ // select_name will be replaced with your input filed name
  $getInput = $_SESSION['docu']; // select_name will be replaced with your input filed name
  $selectedOption = "";
  foreach ($getInput as $option => $value) {
    $selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
  ?>
        <b>[ <?=$value?> ]</b>
<?php
  }
}
?>
      를<b> <?=$_SESSION['org']?></b>으로 보내신다구요?</p>
        </br>
      </br>
        

        <p color=#4a4a4a>비밀번호를 입력해주세요.</p>
<br>

</div>

       


      
        <input class ="password" type="password" name="memberName" maxlength="20" id="pwd">
        <button class="snip1535" id="btn" onclick="unlockAccount()">인증</button>
     
<br>
<br>
        <p id="pw_red">인증을 완료해야 다음 단계로 넘어갈 수 있어요.</p>
<br>   
      <!-- jQuery_336 -->
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      


      <div class="contentsBottom">
      <button class="btn_prev"
      onclick="location.href='index.html'">
      이전</button>
      <button id="btn_next2" 
      onclick="location.href='loading.php'">다음
      </button>
      </div>
  

</div>



  </div>












    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../scroll-navigation.js"></script>
    <script>
      $(document).ready(function () {
        var s = new scrollNav();
        s.init();
      });

    </script>

    <script type="text/javascript" src="./js/bignumber.min.js">
    </script>
    <script type="text/javascript" src="./js/crypto-js.js">
    </script>
    <script type="text/javascript" src="./js/utf8.js"></script>
    <script type="text/javascript" src="./js/web3.min.js"></script>
    <script>
      var web3 = new Web3();
      var provider = new web3.providers.HttpProvider("http://localhost:8545");

      web3.setProvider(provider);

      function unlockAccount() {
        var address = "0x4d742c10916d042b923ce800608da5208389dd7b";
        var password = document.getElementById("pwd").value;
        web3.personal.unlockAccount(address, password, 3000, function (error, result) {
          

          if (error) {
            alert("사용자 인증 성공");
            document.getElementById("btn_next2").style.color = "white";
            document.getElementById("btn_next2").style.backgroundColor = "#bac79e";
          }
          else {
            alert("사용자 인증 실패");
          }
        })
      }
    </script>

    </script>





</body>



</html>