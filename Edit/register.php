<!------------------------------------------------------------------>
<!-- REGISTER -->
<!------------------------------------------------------------------>

<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	// NEW ACCOUNT INSTANCE IS NEW CONNECTION TO DATABASE
	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>

	<head>
		<title>Breathe</title>
		<!-- CSS -->
		<link rel="stylesheet" href="./assets/css/index.css">
		<!-- FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
		<!-- JQUERY -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- AJAX -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- REGISTER -->
		<script src="assets/js/register.js"></script>
	</head>

	<body>
		<div id="container" >

			<div class="page-header">
				<h4 class="page-subtitle">Welcome to</h4>
				<h1 class="page-title">Breathe!</h1>
				<hr/>
				<h4 class="page-subtitle">Relax, Rest, Or Focus</h4>
			</div>

			<div class="form-container">
		
				<form id="login_form" action="register.php" method="POST">

					<h3 class="page-subtitle">Login</h3>
					<hr/>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="johnDoe" value="<?php getInputValue('loginUsername') ?>" required autocomplete="off">
					</p>
					
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="register-note">
						<span id="hide_login">Don't have an account yet? Signup here.</span>
					</div>
					
				</form>

		
				<form id="register_form" action="register.php" method="POST">

					<h3>Create your account</h3>
					<hr/>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="johnDoe" value="<?php getInputValue('username') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First name</label>
						<input id="firstName" name="firstName" type="text" placeholder="John" value="<?php getInputValue('firstName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last name</label>
						<input id="lastName" name="lastName" type="text" placeholder="Doe" value="<?php getInputValue('lastName') ?>" class="br" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input class="br" id="email" name="email" type="email" placeholder="johnDoe@gmail.com" value="<?php getInputValue('email') ?>" required>
					</p>

					<p>
						<label for="email2">Confirm email</label>
						<input id="email2" name="email2" type="email" placeholder="johnDoe@gmail.com" value="<?php getInputValue('email2') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Your password" required>
					</p>

					<p>
						<label for="password2">Confirm password</label>
						<input id="password2" name="password2" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>

					<div class="register-note">
						<span id="hide_register">Already have an account? Log in here.</span>
					</div>
					
				</form>
				
			</div>
		</div>
		
		<!-- PHP :  -->
		<?php
			if(isset($_POST['registerButton'])) {
				echo '<script>
						$(document).ready(function() {
							$("#login_form").hide();
							$("#register_form").show();
						});
					</script>';
			} else {
				echo '<script>
						$(document).ready(function() {
							$("#login_form").show();
							$("#register_form").hide();
						});
					</script>';
			}
		?>

	
		<script>
			$(document).ready(function() {

				$("#hide_login").click(function() {
					$("#login_form").hide();
					$("#register_form").show();
				});

				$("#hide_register").click(function() {
					$("#login_form").show();
					$("#register_form").hide();
				});
			});
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
	</body>
</html>