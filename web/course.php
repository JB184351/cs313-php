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
    $query = "SELECT id, name, number FROM course";

	// You would then prepare a statement based on that query:
	$stmt = $db->prepare($query);
	$stmt->bindValue('user_name', $user_name, PDO::PARAM_STR);
	

	try {
		$stmt->execute();
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
	<h1>Courses</h1>
</head>
<body>
	<ul>
		<li><p>Course 1</p></li>
		<li><p>Course 2</p></li>
		<li><p>Course 3</p></li>
		<li><p>Course 4</p></li>
		<li><p>Course 5</p></li>
	</ul>

	<?php 

		foreach ($stmt fetchAll(PDO::FETCH_ASSOC) as $course) {
			$name = $course["name"];
			$number = $course["number"];

			echo "<li>$number - $name</li>";
	}
	 ?>


</body>
</html>