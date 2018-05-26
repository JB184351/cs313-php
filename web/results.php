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
	echo "\n";

	//$query = "SELECT score.score FROM score INNER JOIN person
    //ON score.person_id = person.id WHERE person.name = :$user_name";
    //echo "$query";
	
	//$stmt = $db->prepare('SELECT * FROM score WHERE col = :placeholder');
	//$stmt->bindValue('placeholder', $query, PDO::PARAM_STR);
	
	// ---------------------
    // $query should represent the actual SQL string you want to run
	// against the database. Placeholders within this SQL string should
	// begin with a colon (:), but should be plain literal identifiers,
	// without any kind of PHP $ variable involved.
	$query = "SELECT score.score FROM score INNER JOIN person
    ON score.person_id = person.id WHERE person.name = :user_name";
	
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
	
	// At this point, it's safe to fetch rows from the statement.
	// ---------------------


	//echo "$stmt";
	//$statement = $db->prepare($query);
	//$statement->bindValue(":score", $user_name, PDO::PARAM_STR);
	//$statement->execute();

	foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $score)
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