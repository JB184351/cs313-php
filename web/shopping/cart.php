<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type ="text/css" href="#"</link>
<script type="text/javascript" src="calc.js"></script>
<h1>Review Page</h1>
<title>Review Page</title>
<style>
</style>
</head>
<body>
<form action="second.php" method="post">
  <div id="content">


First name:<br>
  <input onInput="getFirstName(this.value, 'name');" type="text" name="firstname">
    
  <br>
  Last name:<br>
  <input onInput="getLastName(this.value, 'name1');" type="text" name="lastname">
  
  <br>
  Address:<br>
  <input type="text" name="address" value="">


<?php

session_start();

echo "<br>";
echo "<p></p>";
echo "Items to be purchased: ";
echo $_REQUEST["product"];
echo "<br>";

echo "Card Number: ";
echo $_REQUEST["payment"];
echo "<br>";

echo "Expiration Date: ";
echo "<br>";

echo "Total Amount: ";
echo $_REQUEST["value"];
echo "<br>";
echo "<br>";

echo "Continue with purhcase? ";

echo "<br>";

?>

<input type="submit" value="Confirm" name="Confirm">
 <input value="Cancel" type="submit" name="Cancel"/>

</div>
</form>
</body>
</html>


 

