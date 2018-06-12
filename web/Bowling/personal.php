<!DOCTYPE html>
<html>
<head>
	<title>Personal Score's Page</title>
	<h1 id="textcolor">Personal Score's Page</h1>
	<link rel="stylesheet" type="text/css" href="bowling.css">
</head>
<body>

<?php

	require("dbConnect.php");
	echo "I hate it!";
	$query = "SELECT score.score, person.name FROM score INNER JOIN person ON score.person_id = person.id";

    $stmt = $db->prepare($query);
    
   
    $stmt->bindValue('name', $query, PDO::PARAM_STR);

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