<!DOCTYPE html>
<html>
<body>

<h2>Team Activity 3</h2>

<form action="/action_page.php">
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
  $FirstName = _$POST["firstname"];
  $LastName =  _$POST["lastname"];

  $Email = _$POST["Email"];

  $Major = _$POST["Major"];

  echo $FirstName . "<br>";
  echo $LastName . "<br>";
  echo $Email . "<br>";
  echo $Major . "<br>";


 ?>  

</form> 

</body>
</html>

