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

if (password_verify($password, $passwordHash)) {
    
    echo "Correct Password";

} else {
    echo "Wrong Password";
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