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
$db = get_db();
$query = "INSERT INTO note (course_id, content, date) VALUES (:courseId, :content, :date)";
$statement = $db->prepare($query);
$statement->bindValue(":courseId", $courseId, PDO::PARAM_INT);
$statement->bindValue(":content", $content, PDO::PARAM_STR);
$statement->bindValue(":date", $date, PDO::PARAM_STR);
$statement->execute();
header("Location: courseDetails.php?course_id=$courseId");
die();

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