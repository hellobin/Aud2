<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/cupertino/jquery-ui-1.8.15.custom.css" />
	</head>
	<body>
		<div id="audPlayer">
			<div id="audAudio">
				<!-- HTML5 Audio Element -->
			</div>
			<div id="audNowMeta">
				<span id="audCurArtist" class="audCont">Artist</span> - <span id="audCurAlbum" class="audCont">Album</span> - <span id="audCurSong" class="audCont">Song</span>
			</div>
			<div id="audControls">
				<button id="audPrev">&lt;</button> <button id="audPlPa">Play</button> <button id="audNext">&gt;</button>
				<br /><span class="audCont audTime" id="audTimePassed">00:00</span> <div class="audCont" id="audSeekCont"><div id="audSeek"></div></div> <span class="audCont audTime">-<span class="audCont" id="audTimeLeft">00:00</span></span>
			</div>
		</div>
		<div id="audLibrary">
			<h3>Aud Library</h3>
			<table>
				<thead id="audLibHead">
					<tr>
						<th>#</th><th>Title</th><th>Artist</th><th>Album</th>
					</tr>
				</thead>
				<tbody id="audLibBody">
				</tbody>
			</table>
		</div>
	</body>
	<footer>
		<script src="js/jquery-1.6.2.min.js"></script>
		<script src="js/jquery-ui-1.8.15.custom.min.js"></script>
		<script src="js/Aud2.js"></script>
	</footer>
</html>