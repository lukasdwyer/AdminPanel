<!--
This file is used to edit the records in table persons. You do not need to run this by yourself. 
This is called by the editrecord.php.
-->
<?php
if (!empty($_GET['PName'])){
$pid = $_GET['PName']; //the value of pid is received from the editrecord.php page
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "dicepals";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

//Things to do, after the "updatebtn" button is clicked.
if(isset($_POST['updatebtn']))
{
	$sql_update= "UPDATE products SET Price='$_POST[Ptb]', Quantity='$_POST[Qtb]' WHERE PName='$pid'";

	$resultupdate = $conn->query($sql_update);

	if($resultupdate) //if the update is done successfully
		{
		echo "Records updated successfully";
		}
}

//when the page is loaded (also after the update is effective), the information of the selected (updated) record is loaded
$sql = "SELECT * FROM products WHERE PName='$pid'";
$result = $conn->query($sql);
?>

<form action="" method="post">
<?php
if($result->num_rows > 0){//if the record is found (which is expected!), then display it in a table
 echo "<table style='border: solid 1px black;'>
	<tr>
	    <th>ProductName</th>
	    <th>Price</th>
	    <th>Quantity</th>
	</tr>";
}

while ($row = $result -> fetch_assoc()){//fetch the attributes to put in the designated textboxes
	echo '<tr>
		<!-- just for simplicity, we assume the PK value cannot be updated, as such, it is "readonly" -->
		<td><input type="text" name="pidtb" value="'.$row['PName'].'" readonly/></td>
		<td><input type="text" name="Ptb" value="'.$row['Price'].'"/></td>
		<td><input type="text" name="Qtb" value="'.$row['Quantity'].'"/></td>
	      <tr>';
}
 echo "</table>";

?>
<input type="submit" value="Update" name="updatebtn"/>

</form>

