<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Movies</h1>

	<ul>
		<li>as;dlfkjasd;f</li>
		<li>;asdklja;f</li>
		<li>a;lsdfkja;sdfjk</li>
		<li>a;sldkj;adf</li>
	</ul>



	<?php

		$dbUrl = getenv('DATABASE_URL');

		$dbopts = parse_url($dbUrl);

		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');

		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		catch(PODException $ex)
		{
			echo 'Error' . $ex->getMessage();
  			die();
		}


	?>

	<?php

		$query = "SELECT title, year FROM movies";

		foreach($db->query($query) as $movie)
		{
			$title = $movie["title"];
			$year = $year["year"];

			echo "<li>$movie ($year)</li>";
		}


	?>



</body>