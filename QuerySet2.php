<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicepals";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT First_Name, Last_Name, City FROM customers WHERE City IN (SELECT City FROM locations WHERE City = 'New Iberia')";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "All customers that live near New Iberia location:";
echo "<table style='border: solid 2px black;'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>City</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['First_Name'].' </td>
<td> '.$row['Last_Name'].' </td>
<td> '.$row['City'].' </td>
</tr>';
}
echo "</table>";
echo "<br>";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicepals";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM customers WHERE Fav_Product REGEXP 'Dice'";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "All customers whose favorite product relates to dice:";
echo "<table style='border: solid 2px black;'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Fav_Product</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['First_Name'].' </td>
<td> '.$row['Last_Name'].' </td>
<td> '.$row['Fav_Product'].' </td>
</tr>';
}
echo "</table>";
echo "<br>";
?>