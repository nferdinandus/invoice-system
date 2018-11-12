<?php
//Make Database connection
$dbc = new mysqli("localhost","root","","invoicing_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//else echo "good";

?>