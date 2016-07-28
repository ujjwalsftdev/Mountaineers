		<?php
        session_start();
		
		include 'db_con.php';
		$user=$_POST['usr'];
		$pass=$_POST['pass'];
		
 
 
		 $qry="select uid,uname,upass,flag from user where uname='$user' ";
		
   		 if(!$result=mysql_query($qry))
		 {
			 echo mysql_error();
		 }
		
		 if($row = mysql_fetch_array($result))
		 {
			if($row['upass']==$pass && $row['uname']==$user && $row['flag']==1)
			{
				$_SESSION['user']=$user;
				$_SESSION['uid']=$row['uid']; 
			header('Location: http://stuweb.cms.gre.ac.uk/~ku001/Mountaineers/social.php'); 
			}
			else  if($row['upass']==$pass && $row['uname']==$user && $row['flag']==0)
			{
			$_SESSION['uid']=$row['uid'];
			$_SESSION['user']=$user;
			header('Location: http://stuweb.cms.gre.ac.uk/~ku001/Mountaineers/verfication.php');
			}
			else
			{
			header('Location: http://stuweb.cms.gre.ac.uk/~ku001/Mountaineers/login.php');
			}
		 } 
		?> 