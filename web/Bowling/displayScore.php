<!DOCTYPE html>
<html>
<head>
	<title>Here are your scores!</title>
</head>
<body>

<?php

$personal_name = htmlspecialchars($_POST["personal_name"]);
$personal_score = htmlspecialchars($_POST["personal_score"]);

//$statement->fetchAll(PDO::FETCH_ASSOC);

//require("bowling.php");
require("dbConnect.php");
$db = get_db();

$query = "INSERT INTO score (person_id, score) VALUES ((SELECT id FROM person WHERE name = 'John', 124";

$statement = $db->prepare($query);
$statement->bindValue(":personal_name", $personal_name, PDO::PARAM_INT);
$statement->bindValue(":personal_score", $personal_score, PDO::PARAM_STR);
$statement->execute();


echo "<li>$personnal_name - $personal_score</li>";

die();
?>

</body>
</html>