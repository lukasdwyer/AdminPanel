<!--
This file is used to display the records from database
Copy this file in C://xampp/htdocs/ and open a browser and run http://localhost/editrecord.php
Before that you should turn on MySQL database server as well as Apache web server.
-->
<?php

$servername = "localhost";// sql server name
$username = "root";// sql username
$password = "";// sql password
$dbname  = "dicepals";// database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM products";// embed a select statement in php
$result = $conn->query($sql);// get result

if($result->num_rows > 0){// check for number of rows. If there are records, build a table to show them
 echo "<table style='border: solid 1px black;'>
	<tr style='border: solid 1px black;'>
	    <th style='border: solid 1px black;'>PName</th>
	    <th style='border: solid 1px black;'>Price</th>
	    <th style='border: solid 1px black;'>Quantity</th>
	</tr>";
}

while ($row = $result -> fetch_assoc()){// Fetch the query result and store them in an array
	echo '<tr style="border: solid 1px black;">
		<td style="border: solid 1px black;">'.$row['PName'].'</td>
		<td style="border: solid 1px black;">'.$row['Price'].'</td>
		<td style="border: solid 1px black;">'.$row['Quantity'].'</td>

<!-- the core edit operation is done in edit.php. Here, we create only a hyperlink and send parameters to edit.php -->
<!--For each row of the table, we create a hyperlink and include the parameter PerID to be used it in the destination page (edit.php)-->
		<td style="border: solid 1px black;"> <a href="Update.php?PName='.$row['PName'].'">Click </a></td>
		</tr>';
}

echo "</table>";
?>