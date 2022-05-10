<!------------------------------------------------------------------>
<!-- USER SETTINGS -->
<!------------------------------------------------------------------>

<?php include("includes/includedFiles.php"); ?>

<section id="section_container">

	<div class="page-header">
		<h1 class="page-title"><?php echo "Welcome" . " " . $userLoggedIn->getFirstAndLastName(); ?></h1>
		<hr/>
		<h4 class="page-subtitle">Account</h4>
	</div>

	<div class="logout-container">
		<button class="logout-button" onclick="logout()">LOGOUT</button>
	</div>


		<div class="container">
			<h3 class="page-subtitle">Update your Email</h3>
			<hr/>
			<input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
			<span class="message"></span>
			<button onclick="updateEmail('email')">SAVE</button>
		</div>

		<div class="container">
			<h2>Update your password</h2>
			<input type="password" class="oldPassword" name="oldPassword" placeholder="Current password">
			<input type="password" class="newPassword1" name="newPassword1" placeholder="New password">
			<input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password">
			<span class="message"></span>
			<button onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
		</div>



</section>
	





