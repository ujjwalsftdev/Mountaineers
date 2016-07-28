<?php
include "db_con.php";
$q=$_GET["usr"];
$qry="SELECT * FROM user WHERE uname ='$q'";


$res = mysql_query($qry);

$count=0;
while($row=mysql_fetch_array($res))
{
$count++;
}
if($count==0)
{
echo "<font color='green'> " . $q . "  is Available" . "</font>";
}
else
{
echo "<font color='red'>". $q. "  is not available, Choose Another User Name" . "</font>";
}
mysql_close($con);
?> 