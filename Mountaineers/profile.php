<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mountaineers</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="bg">
<div align="right">Welcome <?php echo "<font color='red'><b>" . $_SESSION['user'] . "</b></font>"  ?>
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
		  <li><a href="showimages.php">View My Images</a></li> 
        </ul>
      </div>
     
    </div>
    <div class="float-r right">
      <div id="logo">
	  <div align="right"><li><a href="logout.php">LogOut</a></li></div>
		<h1>MountaiNet</h1>
        <div>Social Networking Web site for Mountaineers</div>
      </div>
	  <br>
	  <br>
	  <br>
	  <br>
	 

      <div id="main">
	<div align="center"><b><font size="3" color="green">ABOUT ME</font></b></div>
        <?php
	  include "db_con.php";
	  $uid=$_SESSION['uid'];

 
	$qry3="select * from aboutme where uid='$uid' ";
	  $res=mysql_query($qry3);
	  while($row=mysql_fetch_array($res))
	  { ?>
	<table align="center" border=1 cellpadding="50" cellspacing="50">
    <tr><td><?php echo $row['abtme'];?></td></tr>
	<?php } ?>
	</table>

	<br>
	<br>
	<br>
	<div align="center"><b><font size="3" color="green">SOCIAL INFORMATION</font></b></div>
	 <?php
	  $qry1="select * from social where uid='$uid' ";
	  $res=mysql_query($qry1);
	  while($row=mysql_fetch_array($res))
	  { ?>
	<table align="center" border=1 cellpadding="50" cellspacing="50">
    <tr><td>First Name:</td><td><?php echo $row['fname'];?></td></tr>
    <tr><td>Last Name:</td><td><?php echo $row['lname'];?></td></tr>
	<tr><td>Age:</td><td><?php echo $row['age'];?></td></tr>
	<tr><td>Date Of Birth:</td><td><?php echo $row['dob'];?></td></tr>
	<tr><td>Sports:</td><td><?php echo $row['sport'];?></td></tr>
	<tr><td>Activities:</td><td><?php echo $row['act'];?></td></tr>
	<tr><td>Passions:</td><td><?php echo $row['passn'];?></td></tr>
	<?php } ?>
	</table>
	<br>
	<br>
	


		<div align="center"><b><font size="3" color="green">CONTACT INFORMATION</font><b></div>

		<?php $qry2="select * from contact where uid='$uid' ";
	  $res=mysql_query($qry2);
	  while($row=mysql_fetch_array($res))
	  { ?>
	<table align="center" border=1 cellpadding="50" cellspacing="50">
    <tr><td>Address:</td><td><?php echo $row['addr'];?></td></tr>
    <tr><td>Mobile:</td><td><?php echo $row['mobile'];?></td></tr>
	<?php } ?>
	</table>



		</p>
      </div>
    </div>
    <div id="footer">
      <div class="float-l">
        <div id="ftlink"> <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Production</a> | <a href="#">Submission</a> | <a href="#">Contact</a> </div>
        <p id="copyright">� 2008. All Rights Reserved. <br/>
  
      </div>
      <div id="xhtml" class="float-r"><img src="images/xhtml.jpg" alt=" xhtml valid" /> <img src="images/css.jpg" alt="css valid" /></div>
    </div>
    <!-- /footer -->
  </div>
</div>
</body>
</html>
