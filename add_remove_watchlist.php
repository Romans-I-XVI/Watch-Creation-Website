<body>
	<?php 
	include("header.php");
	if(isset($_POST['video_id']) && !empty($_POST['video_id'])) {
		echo 'test';
	    $video_id = $_POST['video_id'];
		print_r($video_id);
		$result = mysql_query("SELECT `UserID`, `VideoID` FROM `watchlist` WHERE UserID=".$_SESSION['UserID']." AND VideoID= '".$video_id."'");
		print_r($result);
		if (mysql_num_rows($result) == 0) {
			mysql_query("INSERT INTO `watchlist`(`UserID`, `VideoID`) VALUES (".$_SESSION['UserID'].",'".$video_id."')");
			}
		else {
			echo 'ran else';
			mysql_query("DELETE FROM watchlist WHERE UserID = ".$_SESSION['UserID']." AND VideoID = '".$video_id."'");
			}
		}
	?>
</body>

