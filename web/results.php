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

$query = "SELECT score FROM score WHERE 
person_id = (SELECT id FROM person WHERE name = '$user_name')";
$statement = $db->prepare($query);
$statement->bindValue(":rating", $user_name, PDO::PARAM_STR);
$statement->execute();

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