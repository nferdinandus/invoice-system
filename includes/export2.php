 <?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "invoicing_system");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Company name', 'Total Invoiced amount', 'Total amount paid', 'Total amount outstanding'));  
      $query = "SELECT `client`, invoice_amount_plus_vat, amount, (invoice_amount_plus_vat - amount) AS outstanding
FROM invoices INNER JOIN invoice_items ON invoices.id = invoice_items.id GROUP BY invoices.id"; 
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  