<?php
//Make Database connection
$dbc = new mysqli("localhost","root","","invoicing_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//else echo "good";
if(isset($_POST["update"])){
$sql = "UPDATE invoices SET invoice_status='$_POST[update]' WHERE id='$_POST[id]'";

if(mysqli_query($dbc,$sql))
	echo "Invoice is updated";
else 
	echo "not update";
}
?>