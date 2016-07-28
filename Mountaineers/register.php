<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
$_SESSION['test']=0;
?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Website for Mountaineers</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function checkusername()
{
var u=document.de.user.value;
if (document.de.user.value=="")
  {
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("sorry").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","usernametest.php?usr="+u,true);
xmlhttp.send();
}

	function Validate()
	{
		 if(document.de.user.value=="")
		 {
        alert("Please Enter a User Name");
        return false;
         }
		else if(document.de.pass.value=="")
        {
            alert("Please Enter Password");
            return false;
        }
		else if(document.de.cpass.value=="")
        {
            alert("Please Enter Confirm Password");
            return false;
        }
		else if(document.de.mail.value=="")
        {
            alert("Please Enter Email Address");
            return false;
        }
        else if(document.de.pass.value!=document.de.cpass.value)
         {
			alert("Passwords Doesnot Match");
			return false;
		 }
		 else
		{
			return true;  
        }
	}
</script>
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
	  <br/>
	  <br/>
	  <br/>
	  <br/>
      <div id="main">
	 
	  <form action="verfication.php" method="post" name="de" onsubmit="return Validate()">
		
		<div id="sorry" align="center"></div>
		<table align="center" bgcolor="silver">
		
       <tr><td>User Name:</td><td> <input type="text" name="user" size="15" onchange="checkusername()"/> </td></tr>
	   <tr><td>Password:</td> <td><input type="password" name="pass" id="p1" size="15"/></td></tr>
       <tr><td>Confirm Password:</td><td><input type="password" name="cpass" id="p2" size="15"/></td></tr>
	   <tr><td>E-mail:</td><td> <input type="text" name="mail" size="15"/></td></tr>
	   <tr><td colspan="2" align="center" ><input type="submit" value="    Register    "  /></td></tr>
	  </table>
	  </fieldset>
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
