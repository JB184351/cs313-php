<?php

include("dbConnect.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign On Page</title>
	<h1> Sign In Page</h1>
</head>
<body>

<?php

if (password_verify($password, $passwordHash)) {
    
    echo "Correct Password";

} else {
    echo "Wrong Password";
}

?>


</body>
</html>