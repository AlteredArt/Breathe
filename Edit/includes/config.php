<!------------------------------------------------------------------>
<!-- DB CONFIGURATION -->
<!------------------------------------------------------------------>

<?php
	ob_start();
	session_start();
	// SET TIME ZONE (CHECK THIS)
	$timezone = date_default_timezone_set("America/Denver");
	// CONNECT TO BREATHE DATABASE
	$con = mysqli_connect("localhost", "root", "", "breathe");
	// CHECK FOR ERRORS
	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>