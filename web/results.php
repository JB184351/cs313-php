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

$query = "SELECT * FROM score";
$statement = $db->prepare($query);
//$statement->bindValue(":rating", $user_rating, PDO::PARAM_STR);
$statement->execute();

foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $score)
{
    $title = $movie["title"];
    $year = $movie["year"];
    $rating = $movie["code"];

    $person = $score["person"];
    $score1 = $score["score"];
    
    echo "<li>$title ($year) - Rated $rating</li>";
}
?>
</body>
</html>