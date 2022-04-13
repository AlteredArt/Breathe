

<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

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
		<link rel="stylesheet" href="./assets/css/index.css">
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/register.js"></script>
	</head>

	<body>

		<div id="background" >
			
			<div class="header_switch">
				<label class="theme_switch" for="checkbox">
					<input type="checkbox" id="checkbox" />
					<div class="slider round"></div>
				</label>
			</div>
			<div id="toggle">
				<i class="indicator"></i>
			</div>

			<div id="loginContainer">
				<div id="loginText">
					<h1>Welcome to Breathe!</h1>
					<hr>
					<p>Relax, Rest, Or Focus</p>
				</div>
			

				<div id="inputContainer">
			
					<form id="loginForm" action="register.php" method="POST">
						<h5 class="c-grey">Login to your account</h5>
						<p>
							<?php echo $account->getError(Constants::$loginFailed); ?>
							<label for="loginUsername">Username</label>
							<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('loginUsername') ?>" required autocomplete="off">
						</p>
						<p>
							<label for="loginPassword">Password</label>
							<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
						</p>

						<button type="submit" name="loginButton">LOG IN</button>

						<div class="hasAccountText">
							<span id="hideLogin">Don't have an account yet? Signup here.</span>
						</div>
						
					</form>

			
					<form id="registerForm" action="register.php" method="POST">
						<h2>Create your free account</h2>
						<p>
							<?php echo $account->getError(Constants::$usernameCharacters); ?>
							<?php echo $account->getError(Constants::$usernameTaken); ?>
							<label for="username">Username</label>
							<input id="username" name="username" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
						</p>

						<p>
							<?php echo $account->getError(Constants::$firstNameCharacters); ?>
							<label for="firstName">First name</label>
							<input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" value="<?php getInputValue('firstName') ?>" required>
						</p>

						<p>
							<?php echo $account->getError(Constants::$lastNameCharacters); ?>
							<label for="lastName">Last name</label>
							<input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" value="<?php getInputValue('lastName') ?>" class="br" required>
						</p>

						<p>
							<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
							<?php echo $account->getError(Constants::$emailInvalid); ?>
							<?php echo $account->getError(Constants::$emailTaken); ?>
							<label for="email">Email</label>
							<input class="br" id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email') ?>" required>
						</p>

						<p>
							<label for="email2">Confirm email</label>
							<input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2') ?>" required>
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

						<button class="pb-5" type="submit" name="registerButton">SIGN UP</button>

						<div class="hasAccountText">
							<span id="hideRegister">Already have an account? Log in here.</span>
						</div>
						
					</form>


				</div>



			</div>
		</div>
		
		<?php
			if(isset($_POST['registerButton'])) {
				echo '<script>
						$(document).ready(function() {
							$("#loginForm").hide();
							$("#registerForm").show();
						});
					</script>';
			} else {
				echo '<script>
						$(document).ready(function() {
							$("#loginForm").show();
							$("#registerForm").hide();
						});
					</script>';
			}
		?>

		<script src="./assets/js/theme.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	</body>
</html>