<?php

	$data = $_POST[test2];
    $_SESSION[org] = $_POST[test2];

if(isset($_POST['documents'])){ // select_name will be replaced with your input filed name
	$getInput = $_POST['documents']; // select_name will be replaced with your input filed name
	$selectedOption = "";
	?>

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




