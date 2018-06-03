<!DOCTYPE html>
<html>
<head>
	<title>Here are your scores!</title>
</head>
<body>

<?php

require("dbConnect.php");

try{

//$person = $score["person"];
 //  	  $score1 = $score["score"];

$personal_name = $_REQUEST["personal_name"];

$sql = "INSERT INTO persons (personal_name) VALUES (:personal_name)";

$stmt->bindParam(':personal_name', $_REQUEST['personal_name']);
$stmt->execute();
echo "Inserted your score successfully!";
}

catch(PDOExeption $e){
	die("ERROR: Data was not able to execute $sql. " . $e->getMessage());
}

echo "$personal_name";

unset($pdo);

?>

</body>
</html>