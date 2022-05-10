<!------------------------------------------------------------------>
<!-- USER SETTINGS -->
<!------------------------------------------------------------------>

<?php include("includes/includedFiles.php"); ?>

<section id="section_container">

	<div class="page-header">
		<h3 class="page-title"><?php echo "Welcome" . " " . $userLoggedIn->getFirstAndLastName(); ?></h3>
		<hr/>
		<h4 class="page-subtitle">Account</h4>
	</div>

	<div class="logout-container fc">
		<button class="logout-button" onclick="logout()">LOGOUT</button>
	</div>

	<div class="update-details">

		<div class="update-email fc">
			<p>Update your Email</p>
			<hr/>
			<input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
			<span class="message"></span>
			<button onclick="updateEmail('email')">SAVE</button>
		</div>

		<div class="update-password fc">
			<h3 >Update your Password</h3>
			<hr/>
			<input type="password" class="oldPassword" name="oldPassword" placeholder="Current password">
			<input type="password" class="newPassword1" name="newPassword1" placeholder="New password">
			<input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password">
			<span class="message"></span>
			<button onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
		</div>
		
	</div>

</section>
	





