<?php 
  // inputan
    $u="admin";
    $p="123";

  // proses
  $iu= $_GET['username'];
  $ip= $_GET['password'];

  // decision / percabangan
  if ($iu == $u && $ip == $p){
  	 // output 1
  	header("Location:dashboard.php");
  	}else{
  		// output 2
  		echo "Username dan Password salah";
  	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
       <form action="" method="get">
       	<input type="text" name="username" id="username">
       	<br>
       	<input type="password" name="password" id="password">
       	<br>
       	<input type="submit" value="Login">
       </form>
 </body>
 </html>