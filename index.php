<!DOCTYPE html>
<?php
//Database connection
require 'includes/database_connection.php';
$sql = "SELECT id, `client`, invoice_amount FROM invoices";




$result = mysqli_query($dbc, $sql) or die ("Bad Query: $sql");
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- MDBootstrap Datatables  -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
</head>


<body>
<form method="post" action="includes/export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
  
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  
  <thead>
    <tr>
      <th class="th-sm">Invoice ID
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Company name
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Invoice amount
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    </tr>
  </thead>
  <tbody>
  
 <?php 
 while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr><form action=includes/update.php method=post>
	  <td>{$row['id']}</td>
	  <td>{$row['client']}</td>
	  <td>{$row['invoice_amount']}</td>
	    <td><select size=1 id=row-1-office name=update>
                    <option name=update value=paid selected=selected>
                        paid
                    </option>
                    <option name=update value=unpaid>
                        unpaid
                    </option>
                </select></td>
	  <td><input type=submit></td>
	  <input type=hidden name=id value={$row['id']}>
	  </form></tr>";					
	  }
?>

</tbody>
</table>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>

<script>
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


</script>
</body>

</html>
