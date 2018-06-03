<?php

function get_db(){
	$db = NULL;


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

return $db;
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
	?>