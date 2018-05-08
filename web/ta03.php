<!DOCTYPE html>
<html>
<body>

<h2>Team Activity 3</h2>

<form method="post">
  First name:<br>
  <input type="text" name="firstname" placeholder="First Name">
  <br>
  Last name:<br>
  <input type="text" name="lastname" placeholder="Last Name">
  <br><br>
  

  Email:<br>
  <input type="text" name="Email" placeholder="Email"><br>

  Major:<br>
  <input type="radio" name="Major" value="Computer Science" checked> Computer Science<br>
  <input type="radio" name="Major" value="Web Design and Devlopment"> Web Design and Development<br>
  <input type="radio" name="Major" value="CIT"> CIT<br> 
  <input type="radio" name="Major" value="Computer Engineering"> Computer Engineering<br> 

  Comments:<br>

  <textarea name="Comments" rows="10" cols="30" placeholder="Comments"></textarea>

  <input type="submit" value="Submit">

 <?php
  
  $FirstName = $_POST["firstname"];
  $LastName =  $_POST["lastname"];

  $Email = $_POST["Email"];

  $Major = $_POST["Major"];

  $Comments = $_POST["Comments"];

  echo $FirstName . "<br>";
  echo $LastName . "<br>";
  echo $Email . "<br>";
  echo $Major . "<br>";
  echo $Comments . "<br>";


 ?>  

</form> 

<br>s

</body>
</html>

