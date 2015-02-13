<body>
	<?php 
	include("header.php");
	if(isset($_POST['video_id']) && !empty($_POST['video_id'])) {
	    $video_id = $_POST['video_id'];
		mysql_query("DELETE FROM watchlist WHERE UserID = ".$_SESSION['UserID']." AND VideoID = ".$video_id);
		}
	?>
</body>

