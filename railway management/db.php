<?php
// Enter your Host, U_id, password, database below.
// I left password empty because i do not set password on 127.0.0.1.
$con = mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
