<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	<title>Results</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
    <div class="container-fluid">

    <!-- Logo -->
   <div class="navbar-header">
   <a href="#" class="navbar-brand">Justin Bengtson</a>
   </div>

   <!-- Menu Items -->
   <div>
   <ul class="nav navbar-nav">
   <li class="active"><a href="#">Home</a></li>
   <li><a href="#">About</a></li>
   <li><a href="#">Contact</a></li>

   <!-- drop down menu -->
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Websites (Boostrap applied) <span class="caret"></span></a>
    <ul class="dropdown-menu">
	<h1> Results!</h1>
<?php
	try
{
    $dbUrl = getenv('HEROKU_POSTGRESQL_BRONZE_URL');
    $dbopts = parse_url($dbUrl);
    
    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}

catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
	$user_name = $_GET["person"];

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
	//$query = "SELECT score.score FROM score INNER JOIN person
    //ON score.person_id = person.id WHERE person.name = :user_name";
	
    $query = "SELECT score.score, person.name AS person FROM score INNER JOIN person ON score.person_id = person.id WHERE person.name = :user_name";

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