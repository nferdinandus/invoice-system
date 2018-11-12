<!DOCTYPE html>
<?php
//Database connection
require 'includes/database_connection.php';

//query for company name and invoice details
$sql = "SELECT `client`, invoice_amount_plus_vat, amount, (invoice_amount_plus_vat - amount) AS outstanding
FROM invoices INNER JOIN invoice_items ON invoices.id = invoice_items.id GROUP BY invoices.id";

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
<form method="post" action="includes/export2.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
  
  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Company name
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Total Invoiced Amount
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Total amount paid
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	  <th class="th-sm">Total amount outstanding
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    </tr>
  </thead>
  <tbody> 
 <?php 
 //Fetch data from query and insert into table data
 while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr>
	  <td>{$row['client']}</td>
	  <td>{$row['invoice_amount_plus_vat']}</td>
	  <td>{$row['amount']}</td>
	  <td>{$row['outstanding']}</td>
	  </tr>"; 			








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
