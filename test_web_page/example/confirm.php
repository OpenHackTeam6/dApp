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
                <h2>주민등록표등본 전송</h2>
<?php



//variable for a table

$data = $_POST[test2];
$_SESSION[org] = $_POST[test2];
$_SESSION[docu] = $_POST['documents'];



if(isset($_SESSION[docu])){ // select_name will be replaced with your input filed name
  $getInput = $_SESSION[docu]; // select_name will be replaced with your input filed name
  $selectedOption = "";
  ?>



<div>
<table cellspacing="1" style="width:1000px;height:50px;border:0px;background-color:#999999;">
<tr>
        <td align="center" valign="middle" width="30%" style="height:30px;background-color:#CCCCCC;">전송된 문서</td>
        <td align="center" valign="middle" width="55%" style="height:30px;background-color:#CCCCCC;">전송 기관</td>
        <td align="center" valign="middle" width="15%" style="height:30px;background-color:#CCCCCC;">접수 여부</td>
        
    </tr>
<?php
  foreach ($getInput as $option => $value) {

    echo $value;
    echo '<>';

    $selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
  

  ?>

   <tr>
    
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?=$value?></td>
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?=$data?></td>
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;">접수중</td>
       
    </tr>


<?php

  }
  
}


?>

</table>





    
    </body>
</html>

