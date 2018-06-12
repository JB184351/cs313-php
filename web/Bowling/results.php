<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bowling Score Results Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bowling.css">
    <script src="week02/homepage.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


	<title>Results</title>

</head>
<body>
	
	<h1> Results!</h1>
    <a href="https://young-tundra-19515.herokuapp.com/Bowling/bowling.php">Bowling Main</a>
<?php
	require("dbConnect.php");

    $user_name = $_GET["person"];

    $query = "SELECT score.score, person.name AS person FROM score INNER JOIN person ON score.person_id = person.id WHERE person.name = :user_name";

    // You would then prepare a statement based on that query:
    $stmt = $db->prepare($query);
    
    // And then, you would bind a value to the prepared statement using
    // 1) the name of the placeholder literal identifier from the SQL string
    // 2) the variable that holds the value you want to inject into the SQL string
    // 3) an optional PDO type hint
    $stmt->bindValue('user_name', $user_name, PDO::PARAM_STR);
    
    // Finally, you would execute the prepared statement with bound values:
    // (try/catch is included only to print errors, if something goes wrong)
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

	foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $score)
	{
  	  $person = $score["person"];
   	  $score1 = $score["score"];
    
   	 echo "<li style='color:white;'>" . $person . " - " . $score1 . "</li>";
	}
?>
</body>
</html>