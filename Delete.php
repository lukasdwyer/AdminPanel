<!--
This file is used to delete a record from database
Copy this file in C://xampp/htdocs/ and open run http://localhost/delete.php
-->
<html>
<body>

<?php

if (!empty($_GET['Phone_Number'])){
$pid = $_GET['Phone_Number'];// get the id value from url parameters
}

$servername = "localhost";// sql server name
$username = "root";// sql username
$password = "";// sql password
$dbname  = "dicepals";// database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_GET['mode']) == 'delete'){

$sqldelete = "DELETE FROM customers WHERE Phone_Number='$pid'";//delete statement
$delete = $conn->query($sqldelete);//execute the query
if($delete)
 { 
  echo "Record deleted successfully!";
 }
}


//Below is the code to show the list of records
$sql = "SELECT * FROM customers";// embed a select statement
$result = $conn->query($sql);// get result

if($result->num_rows > 0){// check for number of rows; if there are records, build html table
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Favorite Product</th>
	    <th>City</th>
	    <th>Phone Number</th>

	</tr>";
}

while ($row = $result -> fetch_assoc()){// store the result in an array; then put them in html table one by one
	echo '<tr>
		<td>'.$row['First_Name'].'</td>
		<td>'.$row['Last_Name'].'</td>
		<td>'.$row['Fav_Product'].'</td>
		<td>'.$row['City'].'</td>
		<td>'.$row['Phone_Number'].'</td>

<!-- below, creates a hyperlink (Delete) and change the mode to "delete". Please note that the link is redirected to the same page (href="Delete.php"). -->
		<td> <a href="Delete.php?Phone_Number='.$row['Phone_Number'].'&mode=delete">Delete </a></td>
	      </tr>';
}
 echo "</table>";


?>
</body>
</html>
