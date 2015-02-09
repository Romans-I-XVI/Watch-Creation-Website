	<div id="footer-gradient"></div>
	<footer>
		<div class="footer-content">
			
			<div class="grid4column">
				<p><img src="images/logo-footer.png" width="185" height="44" alt="Logo"><br/>
					1600 Holloway Ave.<br/>
					San Francisco, CA<br/>
					no-reply@progressionstudios.com</p>
				<div class="social-icons"><a href="http://twitter.com/" target="_blank"><img src="images/social-icons/twitter.png" width="20" height="20" alt="Twitter" class="transparent"></a> <a href="http://facebook.com/" target="_blank"><img src="images/social-icons/facebook.png" width="20" height="20" alt="Facebook" class="transparent"></a> <a href="http://tumblr.com/" target="_blank"><img src="images/social-icons/tumblr.png" width="20" height="20" alt="Tumblr" class="transparent"></a> <a href="http://dribbble.com/" target="_blank"><img src="images/social-icons/dribbble.png" width="20" height="20" alt="Dribbble" class="transparent"></a> <a href="http://skype.com/" target="_blank"><img src="images/social-icons/skype.png" width="20" height="20" alt="Skype" class="transparent"></a> <a href="http://vimeo.com/" target="_blank"><img src="images/social-icons/vimeo.png" width="20" height="20" alt="Vimeo" class="transparent"></a> <a href="http://youtube.com/" target="_blank"><img src="images/social-icons/youtube.png" width="20" height="20" alt="Youtube" class="transparent"></a> <a href="mailto:no-reply@email.com"><img src="images/social-icons/email.png" width="20" height="20" alt="E-mail" class="transparent"></a></div>
			</div>
			
			<div class="grid4column">
				<h3>Meta</h3>
					<ul>
						<li><a href="#">Site Admin</a></li>
						<li><a href="#" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="#" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
						<li><a href="http://themeforest.net/user/ProgressionStudios?ref=ProgressionStudios" target="_blank">Progression Studios</a></li>
					</ul>
			</div>
			
			<div class="grid4column">
				<h3>Recent Tweets</h3>
				            <a class="twitter-timeline"  href="https://twitter.com/Retaliate_IXVI" data-widget-id="564846427759972352">Tweets by @Retaliate_IXVI</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
				</div>
			
			<div class="grid4column lastcolumn">
				<h3>Flickr Photos</h3>
				<script type="text/javascript">
				//Flickr Widget in Sidebar			
				jQuery(document).ready(function($){		 			   
					// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
					$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&lang=en-us&format=json&jsoncallback=?", displayImages);  //YOUR IDGETTR GOES HERE
					function displayImages(data){																															   
						// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
						var iStart = Math.floor(Math.random()*(0));	

						// Reset our counter to 0
						var iCount = 1;								

						// Start putting together the HTML string
						var htmlString = "<ul>";					

						// Now start cycling through our array of Flickr photo details
						$.each(data.items, function(i,item){

							// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
							if (iCount > iStart && iCount < (iStart + 7)) {

								// I only want the ickle square thumbnails
								var sourceSquare = (item.media.m).replace("_m.jpg", "_s.jpg");		

								// Here's where we piece together the HTML
								htmlString += '<li><a href="' + item.link + '" target="_blank">';
								htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
								htmlString += '</a></li>';
							}
							// Increase our counter by 1
							iCount++;
						});		

					// Pop our HTML in the #images DIV	
					$('.flickr-widget-4').html(htmlString + "</ul>");

					// Close down the JSON function call
					}

				// The end of our jQuery function	
				});
				</script>
				<div id="flickr-footer" class="flickr-widget-4"></div>
			</div>
		
		<div class="clearfix"></div>
		</div><!-- close .footer-content -->
		
		<div id="footer-base">
			<div id="footer-base-content">
				<div id="copyright-footer">Copyright &copy; 2012 Primero Theme. Designed by <a href="http://themeforest.net/user/ProgressionStudios/portfolio?ref=ProgressionStudios" target="_blank">Progression Studios</a>.</div>
				<div id="footer-navigation">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Blog</a></li>    
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			
			<div class="clearfix"></div>
			</div><!-- close #footer-base-content -->
			
		</div>
		
	</footer>
	
</body>
</html>