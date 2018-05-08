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

  <textarea name="Comments" rows="10" cols="30" placeholder="Comments"></textarea><br>

  Places Visited:<br>
  <input type="checkbox" name="continent[]" value="North America">North America<br>
  <input type="checkbox" name="continent[]" value="South America">South America<br>
  <input type="checkbox" name="continent[]" value="Europe">Europe<br>
  <input type="checkbox" name="continent[]" value="Asia">Asia<br>
  <input type="checkbox" name="continent[]" value="Austrailia">Austrailia<br>
  <input type="checkbox" name="continent[]" value="Africa">Africa<br>
  <input type="checkbox" name="continent[]" value="Antarctica">Antarctica<br>


  <input type="submit" value="Submit">

 <?php
  
  $FirstName = $_POST["firstname"];
  $LastName =  $_POST["lastname"];

  $Email = $_POST["Email"];

  $Major = $_POST["Major"];


  $Comments = $_POST["Comments"];
  $Continent = $_POST['continent'];

  echo $FirstName . "<br>";
  echo $LastName . "<br>";
  echo $Email . "<br>";
  echo $Major . "<br>";
  echo $Comments . "<br>";


  if(!empty($_POST['continent'])){

    foreach($_POST['continent']){

      echo $Continent . "<br>";
    }

  }

 ?>  

</form> 

<br>

</body>
</html>

