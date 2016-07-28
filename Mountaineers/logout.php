<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start(); 
session_destroy();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Moutaineers Social Network Site</title>
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
        <div>Social Networking Web site for Mountaineers</div>
      </div>
      <div id="main">
	 <div align="center"><b> You are Successfully Logged Out.</b>
	 <img src="logout.jpg" alt="logout" /></div>

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
