		     <?php
		    session_start();
		    include 'db_con.php';
		     $code=$_POST['ccode'];
		     $uname=$_SESSION['user'];
		
$error= "";
$errorcode ="";
   require_once('recaptchalib.php'); 
 $privatekey = "6LfiJr4SAAAAAF9QtHZiLn27ix4CuOi5NSxdqJu_";   
 $resp = recaptcha_check_answer ($privatekey, 
																												
																												
																												
																												$_SERVER["REMOTE_ADDR"],                                 
																												$_POST["recaptcha_challenge_field"],                                 
																												$_POST["recaptcha_response_field"]); 



 if (!$resp->is_valid) {    
// What happens when the CAPTCHA was entered incorrectly    
$error = "<br/> The reCAPTCHA wasn't entered correctly.<br/> <br/>" ;   
include 'verfication.php';
exit;

}


			

			$qry1="select uid,uname,code,flag from user where uname='$uname' ";
		    $result=mysql_query($qry1);
		 
		 
			if($row = mysql_fetch_array($result))
			{
			
			if($row['code']==$code)
			{
			$_SESSION['uid']=$row['uid'];
			$qry2="update user SET flag='1' where uname='$uname' ";
			mysql_query($qry2);
			header('Location: http://stuweb.cms.gre.ac.uk/~ku001/Mountaineers/social.php');
			}//if
			else
			{
$errorcode ="The Confirmation code you entered was incorrect.<br/>";
include 'verfication.php';
exit;
			}//else 
			}
			 
			?>