<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start(); ?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Website for Mountaineers</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="bg">
  <div id="wrap">
    <div class="float-l left">
      <ul id="nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="register.php">Register</a></li>
         <li><a href="login.php">Login</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div>
    <div class="float-r right">
      <div id="logo">
		<h1>MountaiNet</h1>
        <div>Social Networking Website for Mountaineers</div>
      </div>
	  <br>
	  <br>
	  <br>
	  <br>
      <div id="main">
	  
	   
	   
	     <?php
		 include 'db_con.php';
		 if(isset($_SESSION['test'])){
		if($_SESSION['test']==0)
		{
		 $user=$_POST['user'];
		 $pass=$_POST['pass'];
		 $mail=$_POST['mail'];
		 $_SESSION['user']=$user;
		 $cncod=uniqid(rand());
		 
		 $qry="insert into user (uname,upass,uemail,code,flag) values('$user','$pass','$mail','$cncod','0')";

		 if(!mysql_query($qry))
		 {
         die(mysql_error());
		 }		  
         else
		 {
			 
		 $to=$mail;
         $sub="Confirmation Code";
		 $headr="from: Admin <admin@mountainet.com>";


         $msg="Your Comfirmation Code is below \n Enter this code in the Verfication Form";
         $msg.="Code: ". $cncod;
         $res = mail($to,$sub,$msg,$headr);
		 if($res)
		 {
         echo "Confirmation Code Has Been Sent To Your Email Address. Kindly Enter the Code Here";
		 }
		 }
		}
	else
	{
		 $uid=$_SESSION['uid'];
		 $qry1="SELECT * from user where uid='$uid' ";
		 $res= mysql_query($qry1);
         if($row=mysql_fetch_array($res))
		 {
         $cncod1=$row['code'];
		 $mail=$row['uemail'];
		 }
		 $to=$mail;
         $sub="Confirmation Code";
		 $headr="from: Admin <admin@mountainet.com>";


         $msg="Your Comfirmation Code is below \n Enter this code in the Verfication Form";
         $msg.="Code: ". $cncod1;
         $res = mail($to,$sub,$msg,$headr);
		 if($res)
		 {
         echo "Confirmation Code Has Been Sent To Your Email Address. Kindly Enter the Code Here";
		 }
		 

	
	}
		 }
		 ?> 
		<center>
		<br>
		<br>
		<form action="verficationaction.php" method="post">
		<?php

	  require_once('recaptchalib.php');  
   $publickey = "6LfiJr4SAAAAAERbsQuAYC7at6qTi1TPOD_9tEl2 "; // you got this from the signuppage       
  echo recaptcha_get_html($publickey);      
  	if(isset($error)){
		echo $error;

		}
  ?>   



		Confirmation Code: <input type="text" name="ccode"><br><br>
<?php
  	if(isset($errorcode)){
		echo $errorcode;

		}
?>

		<input type="submit" value="           VERIFY  ME        ">
		</form>
	   </p>
      </div>
    </div>
	<?php

	unset($_SESSION['test']);
	?>
    <div id="footer">
    
      <div id="xhtml" class="float-r"><img src="images/xhtml.jpg" alt=" xhtml valid" /> <img src="images/css.jpg" alt="css valid" /></div>
    </div>
    <!-- /footer -->
  </div>
</div>
</body>
</html>