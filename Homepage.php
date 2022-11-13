<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="dicepal")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Pssword";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="password_style.css">
</head>
<body>
<div id="wrapper">

<?php
error_reporting(E_ALL ^ E_WARNING); 
if($_SESSION['password']=="dicepal")
{
 ?>
 <h1> <a href="Display.php">All Tables</a></h1>
  <h1> Actions:</h1>
 <h1> <a href="Insert.php">Add Locations</a></h1>
 <h1> <a href="EditRecord.php">Adjust Products</a></h1>
 <h1> <a href="Delete.php">Remove Customers</a></h1>
  <h1> Queries:</h1>
   <h1> <a href="QuerySet1.php">Product Queries</a></h1>
   <h1> <a href="QuerySet2.php">Customer Queries</a></h1>
   <h1> <a href="QuerySet3.php">Location Queries</a></h1>
 <form method="post" action="" id="logout_form">
  <input type="submit" name="page_logout" value="LOGOUT">
 </form>
 <?php
}
else
{
 ?>
 <form method="post" action="" id="login_form">
  <h1>LOGIN TO PROCEED</h1>
  <input type="password" name="pass" placeholder="*******">
  <input type="submit" name="submit_pass" value="Submit">
 </form>
 <?php
}
?>

</div>
</body>
</html>