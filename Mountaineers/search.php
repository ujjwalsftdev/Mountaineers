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
		
      <div id="main">  
	 
	<div align="center"><b><font size="3" color="green">FIND MEMBERS</font></b></div>
	  <form name="form" action="search.php" method="get">
  <input type="text" name="member" />
  <input type="submit" name="Submit" value="Search" />
</form>
	  
	<?php

  // Get the search variable from URL

  $var = @$_GET['member'] ;
  $trimmed = trim($var); //trim whitespace from the stored variable

// rows to return
$limit=10; 

// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<p>Please enter the member name that you want to search...</p>";
  exit;
  }


mysql_connect("mysql.cms.gre.ac.uk","ku001","eyedk75A"); 


mysql_select_db("mdb_ku001") or die("Unable to select database"); 


$query = "select * from user where uname='$var ' "; 

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);


if ($numrows == 0)
  {
  echo "<h4>Results</h4>";
  echo "<p>Sorry, your search: &quot;" . $var . "&quot; returned zero results</p>";


  }

// next determine if s has been passed to script, if not use 0
  if (empty($s)) {
  $s=0;
  }

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for
echo "<p>You searched for: &quot;" . $var . "&quot;</p>";

// begin to show results set
echo "Results";
$count = 1 + $s ;

// now you can display the results returned
  while ($row= mysql_fetch_array($result)) {
  $title = $row["uname"];

  echo "$count.)&nbsp;$title" ;
  $count++ ;
  }

$currPage = (($s/$limit) + 1);

//break before paging
  echo "<br />";

 
$a = $s + ($limit) ;
  if ($a > $numrows) { $a = $numrows ; }
  $b = $s + 1 ;
  echo "<p>Showing results $b to $a of $numrows</p>";
  
?>

</script>

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