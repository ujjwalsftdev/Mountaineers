<?php
$con = mysql_connect("mysql.cms.gre.ac.uk","ku001","eyedk75A");
if (!$con)
{
 die('Unable to establish connection  : ' . mysql_error());
}
if(!mysql_select_db("mdb_ku001", $con))
{
  die('Unable to Connect  : ' . mysql_error());
}
?>