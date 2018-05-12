<!DOCTYPE html>
<html>
<body>

<h1>Browse Items!</h1>

<form action="first.php" name="form1" method="post" onsubmit="return checkForm('name', 'name1', 'cardNum', 'phone', 'box','product',)">
  <fieldset>
            <legend>
                Products
            </legend>
            <label>
                <input name="iPad Pro 12.9 (64GB)" value="800.00" type="checkbox" id="p1" class="product" onclick="totalIt()"/>
                iPad Pro 12.9 Wifi (64GB) ($800.00)
              <br>
                <input name="product" value="649.00" type="checkbox" id="p2" class="product" onclick="totalIt()"/>
                iPad Pro 10.5 Wifi (64GB) ($649.00)
              <br>

              <input name="2018 iPad (32GB) (With Apple Pencil Support)" value="329.99" type="checkbox" id="p3" class="product" onclick="totalIt()"/> 2018 iPad 9.7 (32GB) ($329.99) (With Apple Pencil support)
              <br>
           
                <input name="Remarkable Tablet" value="699.99" type="checkbox" id="p4" class="product" onclick="totalIt()"/>
                Remarkable Tablet ($699.99)
              <br>
              <input name="SamSung Galaxy Tab S3 (32GB)" value="549.99" type="checkbox" id="p5" class="product" onclick="totalIt()"/>
              SamSung Galaxy Tab S3 (32GB) ($549.99)
              <br>
               <input name="Rocket Book Wave" value="25.29" type="checkbox" id="p6" class="product" onclick="totalIt()"/>
              Rocket Book Wave ($25.29)
        </fieldset><br>

        <input type="submit" value="Submit">
        <input value ="Reset" type="reset"/>


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