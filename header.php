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
	<link href="//vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/4.11/video.js"></script>
	<script>
		function logout() {
    		$.get("logout.php");
    		return false;
		}
		function myvideos_remove_watchlist(contentid) {
			$.ajax({ url: 'add_remove_watchlist.php',
	         data: {video_id: contentid},
	         type: 'post'
			});
			$("#item_"+contentid).remove();
			$("#showcase").hide();
			$("#first-base-pagination").hide();
		}
		
		function add_remove_watchlist(id) {
			$.ajax({ url: 'add_remove_watchlist.php',
	         data: {video_id: id},
	         type: 'post'
			});
			if ($('#watchlist_button:contains("Add To Watchlist")').length > 0){
        		$("#watchlist_button").text("Remove From Watchlist");
        		}
        	else {
        		$("#watchlist_button").text("Add To Watchlist");
        		}
		}
		
 		function ajax_reload(title,synopsis,date,img_url,video_url,contentid){
 			$.ajax({ url: 'check_watchlist.php',
 			 async: false,
	         data: {video_id: contentid},
	         type: 'post',
	         success: function(data) {
	                    in_watchlist = data;
	                  }
			});
 			title = title.replace(/'/g, "&#39;");
 			synopsis = synopsis.replace(/'/g, "&#39;");
 			title = title.replace(/"/g, "&#34;");
 			synopsis = synopsis.replace(/"/g, "&#34;");
 			video_player = '<video id="'+contentid+'" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="560" height="315" poster="'+img_url+'" > <source src="'+video_url+'" type="video/mp4" /> <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p></video>'
 			if (in_watchlist != -1) {
	 			if (in_watchlist == false) {
	 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="'+video_url+'" class="button">Download</a><a onclick="add_remove_watchlist(\''+contentid+'\')" class="button" id="watchlist_button">Add To Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
	 			}
	 			else {
	 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="'+video_url+'" class="button">Download</a><a onclick="add_remove_watchlist(\''+contentid+'\')" class="button" id="watchlist_button">Remove From Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
	 			}
 			}
 			else {
 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="'+video_url+'" class="button">Download</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 			}
 			videojs(document.getElementById(contentid), {}, function(){
			});
 		}
 		
 		function ajax_reload_myvideos(title,synopsis,date,img_url,video_url,contentid){
 			$.ajax({ url: 'check_watchlist.php',
 			 async: false,
	         data: {video_id: contentid},
	         type: 'post',
	         success: function(data) {
	                    in_watchlist = data;
	                  }
			});
 			title = title.replace(/'/g, "&#39;");
 			synopsis = synopsis.replace(/'/g, "&#39;");
 			title = title.replace(/"/g, "&#34;");
 			synopsis = synopsis.replace(/"/g, "&#34;");
 			video_player = '<video id="'+contentid+'" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="560" height="315" poster="'+img_url+'" > <source src="'+video_url+'" type="video/mp4" /> <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p></video>'
 			if (in_watchlist == true) {
 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a class="button">Download</a><a onclick="myvideos_remove_watchlist(\''+contentid+'\')" class="button" id="watchlist_button">Remove From Watchlist</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 			}
 			else {
 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a class="button">Download</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 			}
 			videojs(document.getElementById(contentid), {}, function(){
			});
 		}
 		function ajax_reload_store(title,synopsis,date,img_url,video_url,owned,contentid){
 			title = title.replace(/'/g, "&#39;");
 			synopsis = synopsis.replace(/'/g, "&#39;");
 			title = title.replace(/"/g, "&#34;");
 			synopsis = synopsis.replace(/"/g, "&#34;");
 			video_player = '<video id="'+contentid+'" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="560" height="315" poster="'+img_url+'" > <source src="'+video_url+'" type="video/mp4" /> <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p></video>'
 			if (owned==1) {
 				$.ajax({ url: 'check_watchlist.php',
	 			 async: false,
		         data: {video_id: contentid},
		         type: 'post',
		         success: function(data) {
		                    in_watchlist = data;
		                  }
				});
	 			$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a class="button">Download</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 				}
 			else {
 				$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left">'+video_player+'</div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="purchase.php?purchase_item_id='+contentid+'" class="button">Buy</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
 				}
 			videojs(document.getElementById(contentid), {}, function(){
			});
 		}
 			
 		function ajax_reload_store_no_login(title,synopsis,date,img_url,contentid){
 			title = title.replace(/'/g, "&#39;");
 			synopsis = synopsis.replace(/'/g, "&#39;");
 			title = title.replace(/"/g, "&#34;");
 			synopsis = synopsis.replace(/"/g, "&#34;");
 			$("#showcase").hide().html('<div class="showcase-slide"><div class="showcase-content"><div class="slider-left"><img src="'+img_url+'" width="560" height="315" </img></div><!-- close .slider-left --><div class="slider-right"><h2>'+title+'</h2><div class="post-details-slider">'+date+'</div><p>'+synopsis+'</p><div class="more-link-slider"><a href="register.php" class="button">Buy</a></div></div><!-- close .slider-right --></div></div>').fadeIn(800);
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