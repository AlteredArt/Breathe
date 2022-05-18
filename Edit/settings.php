<!------------------------------------------------------------------>
<!-- USER SETTINGS -->
<!------------------------------------------------------------------>

<?php include("includes/includedFiles.php"); ?>

<section class="container">

	<div class="page-header">
		<h3 class="page-title"><?php echo "Welcome" . " " . $userLoggedIn->getFirstAndLastName(); ?></h3>
		<hr/>
		<p class="page-subtitle">UPDATE YOUR ACCOUNT</p>
	</div>

	<div class="logout-container dfc">
		<button class="logout-button button-template" onclick="logout()">LOGOUT</button>
	</div>

	<div class="update-details">

		<div class="update-email dfc">
			<p class="page-subtitle">Update your Email</p>
			<hr/>
			<input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
			<span class="message"></span>
			<button onclick="updateEmail('email')">SAVE</button>
		</div>

		<div class="update-password dfc">
			<p class="page-subtitle">Update your Password</p>
			<hr/>
			<input type="password" class="oldPassword" name="oldPassword" placeholder="Current password">
			<input type="password" class="newPassword1" name="newPassword1" placeholder="New password">
			<input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password">
			<span class="message"></span>
			<button onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
		</div>
		
	</div>

</section>
	
<script>
	// LOGOUT
	function logout() {
		$.post("includes/handlers/ajax/logout.php", function() {
			location.reload();
		});
	}


	//UPDATE PASSWORD
	function updatePassword(oldPasswordClass, newPasswordClass1, newPasswordClass2) {
		var oldPassword = $("." + oldPasswordClass).val();
		var newPassword1 = $("." + newPasswordClass1).val();
		var newPassword2 = $("." + newPasswordClass2).val();

		$.post("includes/handlers/ajax/updatePassword.php", 
			{ oldPassword: oldPassword,
				newPassword1: newPassword1,
				newPassword2: newPassword2, 
				username: userLoggedIn})

		.done(function(response) {
			$("." + oldPasswordClass).nextAll(".message").text(response);
		})


	}
</script>




