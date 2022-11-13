<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicepals";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM locations WHERE Store_Phone_Number REGEXP '337'";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "All locations with Louisiana area codes:";
echo "<table style='border: solid 2px black;'>
<tr>
<th>City</th>
<th>Street</th>
<th>Phone Number</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['City'].' </td>
<td> '.$row['Street'].' </td>
<td> '.$row['Store_Phone_Number'].' </td>
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
$sql = "SELECT * FROM locations WHERE Store_Phone_Number IN (SELECT Store_Phone_Number FROM products WHERE pname REGEXP 'dice')";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "All locations that carry dice related products:";
echo "<table style='border: solid 2px black;'>
<tr>
<th>City</th>
<th>Street</th>
<th>Phone Number</th>
</tr>";
}
while ($row = $result -> fetch_assoc()){
echo '<tr>
<td> '.$row['City'].' </td>
<td> '.$row['Street'].' </td>
<td> '.$row['Store_Phone_Number'].' </td>
</tr>';
}
echo "</table>";
echo "<br>";
?>