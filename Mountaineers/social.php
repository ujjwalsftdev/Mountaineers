<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Website for Mountaineers</title>
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
		$uid=$_SESSION['uid'];
		$qry="select * from social where uid='$uid'  ";
		$result=mysql_query($qry);
		if($row=mysql_fetch_array($result))
		{  }
		?> 
      <div id="main">  
	  <form action="socialaction.php" method="post">
	  <table align="center">
	 
       <tr><td>First Name:</td><td> <input type="text" name="fname" value="<?php echo $row['fname'];?>" size="20"> </td></tr>
	   <tr><td>Last Name:</td> <td><input type="text" name="lname" size="20" value="<?php echo $row['lname']; ?>" </td></tr>
       <tr><td>Age:</td><td><input type="text" name="age" size="20" value="<?php echo $row['age']; ?>"></td></tr>
	   <tr><td>Sex:</td>
	   <td> <input type="radio" name="sex" value="m" checked >Male
	         <input type="radio" name="sex" value="f">Female</td></tr>
	   <tr><td>Date Of Birth:(DD-MM-YY)</td><td>
	   <input type="text" name="dob" size="20" value="<?php echo $row['dob']; ?>"></td></tr>
	   <tr><td>Home Town:</td><td> <input type="text" name="ht" size="20" value="<?php echo $row['ht']; ?>"> </td></tr>
	   <tr><td>Sports</td><td> <textarea rows="5" cols="20" name="sp"><?php echo $row['sport']; ?> </textarea></td></tr>
	   <tr><td>Activities:</td><td> <textarea rows="5" cols="20" name="act"><?php echo $row['act'];?> </textarea></td></tr>
	   <tr><td>Passions:</td><td> <textarea rows="5" cols="20" name="pasn"><?php echo $row['passn']; ?> </textarea></td></tr>
	   <tr><td colspan="2" align="center" ><input type="submit" value="    Submit    "></td></tr>
	   
	  </table>

        </form>
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
