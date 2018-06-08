<?php

require("dbConnect.php");

$courseId = htmlspecialchars($_GET["course_id"]);

$db = get_db();

$query = "SELECT name, number FROM course WHERE id=:id";

$statment = db->prepare($query);

$statement->bindValue(":id", $courseId, PDO::PARAM_INT);
$statment->execute();
$statment->fetch();
$row = $statement->fetch();

var_dump($row);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing Course Details</title>
</head>
<body>

<?php
	echo "<h1>Showing Notes for: $number - $name</h1>";
  ?>

 <form action="insertNote.php" method="POST">
 	<textarea name="content" placeholder="Content"></textarea>
 </form>

</body>
</html>