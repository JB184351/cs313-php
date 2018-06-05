<?php

include("dbConnect.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page</title>
	<h1>Sign up Here!!!!</h1>
</head>
<body>
<?php

$user_name = $_POST["user"];
$password = $_POST["password"];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

if(isset($user_name) and isset($password)){
	$stmt = $db->prepare("INSERT INTO users (user_name, password) VALUES (:user_name, :password)");

	$stmt->bindValue(':user_name', $user_name, PDO:PARAM_STR);
	$stmt->bindValue(':password', $password, PDO:PARAM_STR);
	$stmt->execute();
}

?>
Sign Up Here!
<form action="signup.php" method="post" >

Username: <br>
<input name="user" type="text"><br>
Password: <br>
<input name="password" type="text"><br>
<button type="submit">Sign Up!<br>

 </form>

</body>
</html>