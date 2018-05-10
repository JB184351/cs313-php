<!DOCTYPE html>
<html>
<body>



<?php
	
	session_start();

	$count = "Session-count";

	if(isset($_SESSION[$count])){

	$_SESSION[$count]++;
	}
	else{
	$_SESSION[$count] = 0;
}

$sessionCount = $_SESSION[$count];

?>

You have visited the page: <?php echo $sessionCount; ?> times

</body>
</html>