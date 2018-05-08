<!DOCTYPE html>
<html>
<body>

<h2>Team Activity 3</h2>

<form method="post">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br><br>
  <input type="submit" value="Submit">

  Email:<br>
  <input type="text" name="Email" value=""><br>

  Major:<br>
  <input type="radio" name="Major" value="male" checked> Computer Science<br>
  <input type="radio" name="Major" value="female"> Web Design and Development<br>
  <input type="radio" name="Major" value="other"> CIT<br> 
  <input type="radio" name="Major" value="other"> Computer Engineering<br> 

 <?php
  
  $FirstName = $_POST["firstname"];
  $LastName =  $_POST["lastname"];

  $Email = $_POST["Email"];

  $Major = $_POST["Major"];

  echo $FirstName . "<br>";
  echo $LastName . "<br>";
  echo $Email . "<br>";
  echo $Major . "<br>";


 ?>  

</form> 

</body>
</html>

