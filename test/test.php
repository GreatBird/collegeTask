<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("college", $con);

$result = mysql_query("SELECT * FROM user
WHERE nickname='zp'");

while($row = mysql_fetch_array($result))
  {
  echo $row['nickname'] . " " . $row['password'];
  echo "<br />";
  }

?>