<!------------------------------------------------------------------>
<!-- PLAYLISTS -->
<!------------------------------------------------------------------>

<?php include("includes/includedFiles.php"); ?>

<div class="container">
	<div class="grid-view-container">

		<h2 class='page-title'>YOUR PLAYLISTS</h2>
		<hr>
		<div class="button-container">
			<button onclick="createPlaylist()">CREATE PLAYLIST</button>
		</div>

		<?php
			$username = $userLoggedIn->getUsername();
			$playlistsQuery = mysqli_query($con, "SELECT * FROM playlists WHERE owner='$username'");

			if(mysqli_num_rows($playlistsQuery) == 0) {
				echo "<p class='no-playlists'>You don't have any playlists yet.</p>";
				echo "<p class='no-playlists'>Create a playlist to have it appear here.</p>";
			}

			while($row = mysqli_fetch_array($playlistsQuery)) {

				$playlist = new Playlist($con, $row);

				echo "<div class='grid-view-item' role='link' tabindex='0' 
							onclick='openPage(\"playlist.php?id=" . $playlist->getId() . "\")'>

						<div class='playlist-image'>
							<img src='assets/images/icons/playlist.png'>
						</div>
						
						<div class='grid-view-info'>"
							. $playlist->getName() .
						"</div>

					</div>";
			}
		?>
	</div>
</div>