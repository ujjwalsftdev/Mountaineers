<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start() ?>
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
        <li><a href="usrhome.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
		<li><a href="social.php">Edit Profile</a></li>
		<li><a href="imgupload.php">Upload Images</a></li>
        <li><a href="adv.php">Post Adventure</a></li>
		<li><a href="search.php">Find Members</a><li>
      </ul>
	  <div id="meun">
        <h2>Sections</h2>
        <ul>
		  <li><a href="aboutme.php">About Me </a></li>
          <li><a href="social.php">Social </a></li>
          <li><a href="contact.php">Contact</a></li>   
        </ul>
      </div>
   
    </div>
    <div class="float-r right">
      <div id="logo">
	  <div align="right"><li><a href="logout.php">LogOut</a></li></div> 
		<h1>MountaiNet</h1>
        <div>Social Networking Website for Mountaineers</div>
      </div>
	  <br>
	  <br>
	  <br>
	  <br>
	  <?php

	  include "db_con.php";
	
	 $adv=$_POST['adv'];
	 $uid=$_SESSION['uid'];
	 
	 
	$qry="INSERT INTO adv(story,uid) VALUES('$adv','$uid')";
	if(!mysql_query($qry))
	echo "Unsuccess in Insertion" . mysql_error();
	else
	echo "<h1>Your Details are Successfully Inserted</h1><br>"; 
 
	?> 

<div id="main">
     </p>
      </div>
    </div>
    <div id="footer">
   
  
    
      <div id="xhtml" class="float-r"><img src="images/xhtml.jpg" alt=" xhtml valid" /> <img src="images/css.jpg" alt="css valid" /></div>
    </div>
    <!-- /footer -->
  </div>
</div>
</body>
</html>
