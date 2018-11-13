For using these files please connect to localhost via XAMPP
•	Place folder invoice-system-master in xampp/htdocs
•	Create the database "invoicing_system" and load database.sql in it.

•	Next via your browser insert http://localhost/invoice-system-master/index.php to run the transactions report. (You can change the payment status in this file)
•	To run the customer report run http://localhost/invoice-system-master/index2.php

Note*: I actually figured out how to change the table so that it shows 5 results per page but at some point it stopped working and I couldn’t find the issue. 
Changes were made in datatables.js and datatables.min.js
aLengthMenu:[10,25,50,100] > aLengthMenu:[5] 


