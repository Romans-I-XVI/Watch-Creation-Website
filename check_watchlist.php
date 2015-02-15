	<?php
	session_start();
 
	$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
	$dbname = "watch_creation"; // the name of the database that you are going to use for this project
	$dbuser = "root"; // the username that you created, or were given, to access your database
	$dbpass = "Britt08"; // the password that you created, or were given, to access your database
 
	mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
	mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
	?>
	<?php 
	if(isset($_POST['video_id']) && !empty($_POST['video_id'])) {
	    $video_id = $_POST['video_id'];
		$result = mysql_query("SELECT `UserID`, `VideoID` FROM `watchlist` WHERE UserID=".$_SESSION['UserID']." AND VideoID= '".$video_id."'");
		if( !empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress'])) {
			if (mysql_num_rows($result) == 0) {
				echo false;
				}
			else {
				echo true;
				}
			}
		else {
			echo -1;
			}
		}
	?>

