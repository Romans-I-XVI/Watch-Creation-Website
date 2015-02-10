<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Watch Creation</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Mobile viewport optimized: j.mp/bplateviewport -->

	<link rel="stylesheet" href="style.css?v=2"><!-- CSS Styles -->
	
	<script src="js/libs/modernizr-2.0.6.min.js"></script><!-- MODERNIZR JavaScript for older browsers -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script><!-- Google CDN's jQuery with a protocol relative URL -->
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.1.min.js"><\/script>')</script><!-- Local fall-back for Google CDN -->
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<?php
	session_start();
 
	$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
	$dbname = "watch_creation"; // the name of the database that you are going to use for this project
	$dbuser = "root"; // the username that you created, or were given, to access your database
	$dbpass = "Britt08"; // the password that you created, or were given, to access your database
 
	mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
	mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
	?>
</head>