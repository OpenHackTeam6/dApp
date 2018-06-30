<!doctype html>
<html>




<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery scroll-navigation Plugin Demo</title>
        <link rel="stylesheet" href="style.css" />
        <style>
        #container { max-width:640px; margin:70px auto;  color:black;}
        </style>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
          $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});</script>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
    </head>
    <body>


   



        <div id="header">
            <div id="logo">문서 발급</div>
            <ul id="tabs" class='nav'>
              <li><a href="#i1" class="scrollNav-links scrollNav-active">기관 선택</a></li>
              <li><a href="#i2" class="scrollNav-links " >비밀번호 입력</a></li>
              <li><a href="#i3" class="scrollNav-links ">전송</a></li>
              <li><a href="#i4" class="scrollNav-links ">확인 및 알림</a></li>
              <li><a href="#i5" class="scrollNav-links "> ༚  </a></li>
            </ul>
          </div>

          <div id="container" class="scrollNavData">  
            <div id="i1" class="scrollNav-content">
              <div id="d1">

이영진님의


<?php



//variable for a table

$data = $_POST[test2];
$_SESSION[org] = $_POST[test2];
$_SESSION[docu] = $_POST['documents'];



if(isset($_SESSION[docu])){ // select_name will be replaced with your input filed name
  $getInput = $_SESSION[docu]; // select_name will be replaced with your input filed name
  $selectedOption = "";

  foreach ($getInput as $option => $value) {

    $selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
  

  ?>

        <b>[ <?=$value?> ]</b>

<?php

  }
  
}

?>



              
             를<b> <?=$_SESSION[org]?></b>으로 아주 안전하게 보내는 중이에요.









              <div class="loader" align="center"></div>
                

      
    </body>
</html>

