<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to BLANK!</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="nowPlayingBarContainer">

	</div>
</body>

</html>