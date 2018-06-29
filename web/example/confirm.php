<!doctype html>
<html>


<?php

session_start();


?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>확인 및 알림</title>
        <link rel="stylesheet" href="style_all.css" />
        

        <style>

#container { width:300px; height:300px;  text-align:center; } 
#block { width:50px; height:50px;  display:inline-block; }


table.type09 {
    border-collapse: collapse;
    text-align: left;
    line-height: 1.5;

}
table.type09 thead th {
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    color: #369;
    border-bottom: 3px solid #036;
}
table.type09 tbody th {
    width: 150px;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    background: #f3f6f7;
}
table.type09 td {
    width: 350px;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
}



      </style>

     
    </head>
    <body>
      <div id="header">
        <ul id="tabs" class='nav'>
          <li><a href="#i1" >기관 선택</a></li>
          <li><a href="#i2">비밀번호 입력</a></li>
          <li><a href="#i3">전송</a></li>
          <li><a href="#i4" id="navAactive">확인 및 알림</a></li>
        </ul>
      </div>

<div class="contentsContainer">
  <div class="contentsHeader">
            
                <h2>전송 완료</h2>
<p>이영진님의
<?php
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
             가<b> <?=$_SESSION[org]?></b>에 아주 안전하게 도착 했습니다.</p>


</div>

<br>
<br>


<?php
if(isset($_SESSION[docu])){ // select_name will be replaced with your input filed name
  $getInput = $_SESSION[docu]; // select_name will be replaced with your input filed name
  $selectedOption = "";
  ?>


</div>

<div id="container">
<div id="block">


<table class="type09" cellspacing="1" style="width:600px;height:50px;border:0px;">
<thead>

<tr>
        <th scope="cols" align="center" valign="middle" width="30%" style="height:30px;">전송된 문서</th>
        <th scope="cols" align="center" valign="middle" width="35%" style="height:30px;">전송 기관</th>
        <th scope="cols" align="center" valign="middle" width="15%" style="height:30px;">접수 여부</th>
        
    </tr>
</thead>
<?php
  foreach ($getInput as $option => $value) {


    $selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
  

  ?>
<tbody>
   <tr>
    
        <th align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?=$value?></th>
        <th align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?=$_SESSION[org]?></th>
        <th align="center" valign="middle" style="height:30px;background-color:#FFFFFF;">접수완료</th>
       
    </tr>
    
  
</tbody>

<?php

  }
  
}


?>
</table>




 </div>
 </div>

<div align=center>
  <button class="btn_next" type="button" onclick="self.close()">종료</button>
</div>
  
    
    </body>
</html>

