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
  <link rel="stylesheet" href="style.css" />
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
    <div id="logo">문서 발급</div>
    <ul id="tabs" class='nav'>
      <li>
        <a href="#i1" class="scrollNav-links scrollNav-active">기관 선택</a>
      </li>
      <li>
        <a href="#i2" class="scrollNav-links ">비밀번호 입력</a>
      </li>
      <li>
        <a href="#i3" class="scrollNav-links ">전송</a>
      </li>
      <li>
        <a href="#i4" class="scrollNav-links ">확인 및 알림</a>
      </li>
      <li>
        <a href="#i5" class="scrollNav-links ">   </a>
      </li>
    </ul>
  </div>

  <div id="container" class="scrollNavData">
    <div id="i1" class="scrollNav-content">
      <div id="d1">
        


      이영진님의


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

             를<b> <?=$_SESSION['org']?></b>으로 보내신다구요?








        <p color=#4a4a4a>비밀번호를 입력해주세요.</p>

        <!-- 자물쇠 이미지 넣기 -->


        <!-- input password 
                -->
        <input type="password" name="memberName" maxlength="20" id="pwd">
        <input type="submit" id="btn" value="인증" onclick="unlockAccount()">
        <!-- input password -->



        <p id="pw_red">인증을 완료해야 다음 단계로 넘어갈 수 있어요.</p>
      </div>



      <!-- jQuery_336 -->
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <div align=center>
        <button id="btn_prev" onclick="location.href='index.html'">
          이전
        </button>
        <button id="btn_next_active" href="#i2" class="scrollNav-links" onclick="location.href='loading.php'">
          다음
        </button>
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
          if (!error) {
            alert("사용자 인증 성공");
            document.getElementById("btn_next_active").style.color = "white";
            document.getElementById("btn_next_active").style.backgroundColor = "#bac79e";
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