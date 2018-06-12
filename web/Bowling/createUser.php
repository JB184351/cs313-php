<link rel="stylesheet" type="text/css" href="bowling.css">
<a href="https://young-tundra-19515.herokuapp.com/Bowling/bowling.php" style="color:white;">Bowling Main</a>
<?php

session_start();
$favoritecolor = $_SESSION['favcolor'];


//echo "$favoritecolor";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Here are your scores!</title>
	<h1> New User Successfully created!!!</h1>
</head>
<body>

<?php


$personal_name = htmlspecialchars($_POST["personal_name"]);
$personal_score = htmlspecialchars($_POST["personal_score"]);

require("dbConnect.php");

$query = "INSERT INTO person (name) VALUES (:personal_name)";

$statement = $db->prepare($query);
$statement->bindValue(":personal_name", $personal_name, PDO::PARAM_STR);
$statement->execute();

$query = "INSERT INTO score (person_id, score) VALUES ((SELECT id FROM person WHERE name = :personal_name), :personal_score)";

$statement = $db->prepare($query);
$statement->bindValue(":personal_name", $personal_name, PDO::PARAM_STR);
$statement->bindValue(":personal_score", $personal_score, PDO::PARAM_INT);
$statement->execute();

 echo "<li style='color:white;'>" . $personal_name . " - " . $personal_score . "</li>";
?>

</body>
</html>