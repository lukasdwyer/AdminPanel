<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicepals";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM locations";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<h1>Locations:</h1>";
echo "<table style='border: solid 2px black;'>
<tr>
<th>Phone Number</th>
<th>City</th>
<th>Street</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['Store_Phone_Number'].' </td>
<td> '.$row['City'].' </td>
<td> '.$row['Street'].' </td>
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
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<h1>Customers:</h1>";
echo "<table style='border: solid 2px black;'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Favorite Product</th>
<th>City</th>
<th>Phone Number</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['First_Name'].' </td>
<td> '.$row['Last_Name'].' </td>
<td> '.$row['Fav_Product'].' </td>
<td> '.$row['City'].' </td>
<td> '.$row['Phone_Number'].' </td>
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
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<h1>Products:</h1>";
echo "<table style='border: solid 2px black;'>
<tr>
<th>Name</th>
<th>  Quantity</th>
<th>  Price</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['PName'].' </td>
<td> '.$row['Quantity'].' </td>
<td> '.$row['Price'].' </td>
</tr>';
}
echo "</table>";
echo "<br>";
?>