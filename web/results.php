<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
	<h1> Results!</h1>
<?php
	$user_name = $_GET["person"];
	echo "$user_name";

	$query = "SELECT score.score FROM score INNER JOIN person
    ON score.person_id = person.id WHERE person.name = :user_name";

	$stmt = $db->prepare('SELECT * FROM score WHERE col = :placeholder');
	$stmt->bindValue('placeholder', $query, PDO::PARAM_STR);
	//$statement = $db->prepare($query);
	//$statement->bindValue(":score", $user_name, PDO::PARAM_STR);
	//$statement->execute();

	foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $score)
	{
 	   //$title = $movie["title"];
 	  //$year = $movie["year"];
 	  //$rating = $movie["code"];

  	  $person = $score["person"];
   	  $score1 = $score["score"];
    
   	 echo "<li>$person - $score1</li>";
	}
?>
</body>
</html>