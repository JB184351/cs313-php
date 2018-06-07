<!DOCTYPE html>
<html>
<head>
	<title>Here are your scores!</title>
</head>
<body>

<?php

$personal_name = htmlspecialchars($_POST["personal_name"]);
$personal_score = htmlspecialchars($_POST["personal_score"]);

$personal_data = $statement->fetchAll(PDO::FETCH_ASSOC);

require("dbConnect.php");
$db = get_db();

$query = "INSERT INTO score (person_id, score) VALUES ((SELECT id FROM person WHERE name = ':personal_name'), :personal_score)";

$statement = $db->prepare($query);
$statement->bindValue(":personal_name", $personal_name, PDO::PARAM_INT);
$statement->bindValue(":personal_score", $personal_score, PDO::PARAM_STR);
$statement->execute();
$personal_data = $statement->fetchAll(PDO::FETCH_ASSOC);
die();

/*foreach ($personal_data as $personal_data) {
	$personal_name = $personal_data["personal_name"];
	$personal_score = $personal_data["personal_score"];
	echo "$personal_name<br>";
	echo "$personal_score<br>";
}
*/

//require("dbConnect.php");

//try{

//$person = $score["person"];
 //  	  $score1 = $score["score"];

//$personal_name = $_REQUEST["personal_name"];

//$sql = "INSERT INTO persons (personal_name) VALUES (:personal_name)";

//$stmt->bindParam(':personal_name', $_REQUEST['personal_name']);
//$stmt->execute();
//echo "Inserted your score successfully!";
//}

//catch(PDOExeption $e){
//	die("ERROR: Data was not able to execute $sql. " . $e->getMessage());
//}

//echo "$personal_name";

//unset($pdo);
?>

</body>
</html>