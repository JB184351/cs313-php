<?php

session_start();
$favoritecolor = $_SESSION['favcolor'];


//echo "$favoritecolor";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Here are your scores!</title>
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


echo "$personal_name - $personal_score";
?>

</body>
</html>