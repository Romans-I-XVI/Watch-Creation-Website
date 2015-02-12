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
	<script>
		function logout() {
    		$.get("logout.php");
    		return false;
		}
		function add_to_watchlist(id) {
			$.ajax({ url: 'add_to_watchlist.php',
         data: {video_id: id},
         type: 'post',
         success: function() {
                      alert("Video added to watchlist");
                  }
		});
		
		}
 		function ajax_reload(title,synopsis,date,img_url,contentid){
 			title = title.replace(/'/g, "\'");
 			synopsis = synopsis.replace(/'/g, "\'");
 			$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="" class="button">Download</a><a href="#showcase" onclick="add_to_watchlist('+contentid+')" class="button">Add To Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 		}
 		function ajax_reload_store(title,synopsis,date,img_url,owned,purchase_item_id){
 			title = title.replace(/'/g, "\'");
 			synopsis = synopsis.replace(/'/g, "\'");
 			if (owned==1) {
 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="" class="button">Download</a><a href="#showcase" onclick="add_to_watchlist('+contentid+')" class="button">Add To Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 				}
 			else {
 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="purchase.php?purchase_item_id='+purchase_item_id+'" class="button">Buy</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 				}
 			}
 		function show_pagination(){
 			$("#first-base-pagination").show()
 		}
	</script>
	<?php 
	function truncate($text, $length) {
   		$length = abs((int)$length);
   		if(strlen($text) > $length) {
      		$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
   		}
   		return($text);
	}
	?>
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