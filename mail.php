<?php

	$name='mywork00500@gmail.com';
	ob_start();
	include("message.php");
	$string = ob_get_contents();
	ob_end_clean();
	$msg= $string;
	$sub='nothing';
	
$headers = "From:mywork00500@gmail.com \r\n";
$headers .= "Reply-To: mywork00500@gmail.com\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	if(mail($name,$sub,$msg,$headers))
	{
	echo 'mail sent............';
	}
else{
echo 'not sent........!!!!!!';
}
	?>