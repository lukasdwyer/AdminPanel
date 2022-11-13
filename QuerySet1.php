<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicepals";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM products WHERE price >30";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "All products over $30:";
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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicepals";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM products WHERE Store_Phone_Number IN (Select Store_Phone_Number FROM locations WHERE Store_Phone_Number = '337-892-5761')";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "All products from lafayette location:";
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