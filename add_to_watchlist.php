<body>
	<?php 
	include("header.php");
	if(isset($_POST['video_id']) && !empty($_POST['video_id'])) {
	    $video_id = $_POST['video_id'];
		mysql_query("INSERT INTO `watchlist`(`UserID`, `VideoID`) VALUES (".$_SESSION['UserID'].",".$video_id.")");
		}
	?>
</body>

