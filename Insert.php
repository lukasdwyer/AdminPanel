<!--
This php file is used to insert data in Persons table
Here we are submitting the form to the same page.
-->

<?php

if(isset($_POST['inserttb'])){ //things to do, once the "submit" key is hit

   $storenumber = $_POST['SNumbertb'];//get form value SSN attribute
   $city = $_POST['Citytb'];//get form value Name attribute
   $s = $_POST['Stb'];//get form value BirthYear attribute

   $servername = "localhost";// sql server machine name/IP (if your computer is the server too, then just keep it as "localhost").
   $username = "root";// mysql username
   $password = "";// sql password
   $dbname  = "dicepals";// database name

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   $sql = "INSERT INTO locations VALUES ('$storenumber', '$city', '$s')";//embed insert statement in PHP
   $result = $conn->query($sql);

   if($result) //if the insert into database was successful
   {
   echo "Records inserted successfully";
   }
}

?>

<!-- The following piece of code is run when the page is loaded (before submit button is hit) -->
<!-- "form" is an HTML tag that enable us to have components such as textbox and buttons in the html page.
"action" part determines the page where the information of the current form (page) should be sent.
"method" part determines if the data in the current form is sent/received to/from another page.
The value of "method" is generally "post". -->
<!--
Here we use $_SERVER['PHP_SELF'] which returns the current page. Here it return insert.php
-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<br/>  <!-- The <br> tag inserts a single line break.-->

<!-- Below, we define components exist in the page (textboxes and submit button) -->
Store Phone Number : <input type="text" name="SNumbertb"/>
<br/> <br/>
City : <input type="text" name="Citytb"/>
<br/> <br/>
Street Name : <input type ="text" name ="Stb"/>
<br/> <br/>
<input type ="submit" value="Insert" name="inserttb"/>
</form>