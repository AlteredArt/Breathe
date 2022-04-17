<div id="navBarContainer">
	<nav class="navBar">

		<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
			<img src="assets/images/icons/circle.png">
		</span>
		
		<div class="header_switch">
			<label class="theme_switch" for="checkbox">
				<input type="checkbox" id="checkbox" />
				<div class="slider round"></div>
			</label>
		</div>
		<div id="toggle">
			<i class="indicator"></i>
		</div>


		<div class="group">

		
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>

			

		</div>

		<div class="group">
			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("background.php")' class="navItemLink">
					Backgrounds
					<!-- <img src="assets/images/icons/search.png" class="icon" alt="Search"> -->
				</span>
			</div>
			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("index.php")' class="navItemLink">
					Music
					<!-- <img src="assets/images/icons/search.png" class="icon" alt="Search"> -->
				</span>
			</div>
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Relax</span>
			</div>
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Sleep</span>
			</div>
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Focus</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Playlists</span>
			</div>

		
		</div>

	</nav>
</div>