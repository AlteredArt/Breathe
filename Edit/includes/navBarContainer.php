<div id="navBarContainer">
	<nav class="navBar">

		<span role="link" tabindex="0" onclick="openPage('home.php')" class="logo">
			<img src="assets/images/icons/circle.png">
		</span>
		

		<div class="group">

		
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>

		</div>

		<div class="group">

			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("home.php")' class="navItemLink">Home</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('relax.php')" class="navItemLink">Relax</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('artist.php')" class="navItemLink">artist</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('album.php')" class="navItemLink">album</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">browse</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('playlist.php')" class="navItemLink">Your Playlists</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
			</div>
		
		</div>

	</nav>
</div>

<script>
	function openPage(url) {

		if(timer != null) {clearTimeout(timer);}
		if(url.indexOf("?") == -1) {url = url + "?";}

		var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn);
		$("#mainContent").load(encodedUrl);
		$("body").scrollTop(0);
		history.pushState(null, null, url);
	}
</script>