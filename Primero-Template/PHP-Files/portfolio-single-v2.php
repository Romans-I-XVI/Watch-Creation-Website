<?php include("header.php"); ?>

<body>
	<header>
		
		<div id="header-top-container">
			<div id="header-top">
				
				<div id="header-top-left">
					<ul class="sf-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="#">Purchase</a>
							<ul>
								<li class="current"><a href="#">Sample drop-down</a></li>
								<li><a href="#aba">Example 1</a></li>
								<li><a href="#abb">Example 2</a></li>
								<li><a href="#abc">Example 3</a> 
									<ul>
										<li class="current"><a href="#">Keep's on going</a></li>
										<li><a href="#aba">Example 4</a></li>
										<li><a href="#abb">Example 5</a></li>
										<li><a href="#abcc">Example 6</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- close #header-top-left -->

				<div id="header-top-right">
					<div class="social-icons"><span>Connect with us:</span> <a href="http://twitter.com/" target="_blank"><img src="images/social-icons/twitter.png" width="20" height="20" alt="Twitter" class="transparent"></a> <a href="http://facebook.com/" target="_blank"><img src="images/social-icons/facebook.png" width="20" height="20" alt="Facebook" class="transparent"></a> <a href="http://youtube.com/" target="_blank"><img src="images/social-icons/youtube.png" width="20" height="20" alt="Youtube" class="transparent"></a> <a href="mailto:no-reply@email.com"><img src="images/social-icons/email.png" width="20" height="20" alt="E-mail" class="transparent"></a></div>
				</div><!-- close #header-top-right -->
				
				<div class="clearfix"></div>
			</div><!-- close #header-top -->
		</div><!-- close #header-top-container -->
		
		
		
		<div id="header-gradient">
			
			<div id="header-logo-container">
				<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></div>
				
				<div id="header-logo-right">
					<form method="get" class="searchform" action="">
						<label for="s" class="assistive-text">Search</label>
						<input type="text" class="field" name="s" id="s" placeholder="Search" />
						<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
					</form>
					<!--div class="advertisement"><a href="http://www.google.com" target="_blank"><img src="images/demo-content/advertisement.png" alt="Ad" width="468" height="60"></a></div-->
					
				</div><!-- close #header-logo-right -->
			
			<div class="clearfix"></div>
			</div><!-- close #header-logo-container -->
			
			<div id="navigation-narrow">
				<nav>
					<ul class="sf-menu">
						<li><a href="index.php">Home</a>
							<ul>
								<li><a href="index-v2.php">Homepage v2</a></li>
								<li><a href="index-v3.php">Homepage v3</a></li>
								<li><a href="index-v4.php">Homepage v4</a></li>
								<li><a href="index-vertical-slider.php">Homepage vertical slider</a></li>
							</ul>
						</li>
						<li><a href="about.php">About</a></li>
						<li><a href="styles.php">Styles</a>
							<ul>
								<li><a href="styles.php">Typography styles</a></li>
								<li><a href="full-width.php">Full width example</a> </li>
								<li><a href="sidebar-left.php">Sidebar left</a></li>
								<li><a href="sidebar-right.php">Sidebar right</a></li>
							</ul>
						</li>
						<li class="current-menu-item"><a href="portfolio.php">Portfolio</a>
							<ul>
								<li><a href="one-column-portfolio.php">One column portfolio</a></li>
								<li><a href="two-column-portfolio.php">Two column portfolio</a></li>
								<li><a href="three-column-portfolio.php">Three column porfolio</a></li>
								<li><a href="portfolio.php">Four column portfolio</a></li>
								<li><a href="portfolio-sidebar.php">Four column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-sidebar-three.php">Three column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-sidebar-two.php">Two column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-sidebar-one.php">One column portfolio w/ sidebar</a></li>
								<li><a href="portfolio-single.php">Single portfolio</a></li>
								<li><a href="portfolio-single-v2.php">Single Portfolio v2</a></li>
							</ul>
						</li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div><!-- close #navigation-narrow -->

		</div><!-- close #header-gradient -->
		
	</header>
	
	
	<div id="main" role="main">	
		
		
		<div class="bread-crumbs"><span>You are here:</span>  <a href="index.php">Home</a> &rsaquo; <a href="portfolio.php">Portfolio</a> &rsaquo; Foster the People - Helena Beat</div>
		
		
		<div class="content-container">
			
			
				
			<div class="page-content">
				
				<ul class="sub-pagination">
					<li class="current-menu-item"><a href="portfolio.php">Back to the Portfolio</a></li>
				</ul>
				
				
				
					
				<h1 class="page-title">Foster the People - Helena Beat</h1>
				
				<div class="portfolio-single">
					
					
					<div class="alignright">
					<ul id="slider-2">
						
						<!-- START SLIDE-->
						<li>
							<a href="images/demo-content/large1.jpg" rel="prettyPhoto[gallery1]" title=""><img src="images/demo-content/single-small1.jpg" width="500" height="280" /></a>
							
						</li>
						<!-- END SLIDE-->
						
						<!-- START SLIDE-->
						<li>
							<iframe src="http://player.vimeo.com/video/9910957?title=0&amp;byline=0&amp;portrait=0" width="500" height="280" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
						</li>
						<!-- END SLIDE-->
						
					</ul>
					
					
					<br/>
					<div class="clearfix"></div>
					</div><!-- close .alignright -->
				
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$('#slider-2').anythingSlider({
							delay               : 3500,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
							animationTime       : 400,       // How long the slideshow transition takes (in milliseconds)
							buildArrows         : false,      // If true, builds the forwards and backwards buttons
							buildNavigation     : true,      // If true, buildsa list of anchor links to link to each panel
							autoPlay            : true,      // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
							hashTags            : false,      // Should links change the hashtag in the URL?
							resizeContents      : true,
							addWmodeToObject    : 'transparent',
							startStopped        : false,     // If autoPlay is on, this can force it to start stopped
							pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover
							resumeOnVideoEnd    : true      // If true & the slideshow is active & a youtube video is playing, it will pause the autoplay until the video has completed
						});
					});
					</script>
					
					
					<div class="portfolio-details">by <a href="#">Michael Garcia</a> on <a href="#">Jan 29 2011</a></div>

					
					
					
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas augue diam, dapibus eget accumsan non, ullamcorper in ante. Nullam semper justo ut risus cursus vel faucibus leo aliquam. Vestibulum sed velit elit, vel malesuada tortor. Quisque congue metus in augue cursus placerat lacinia tellus volutpat. Curabitur bibendum pellentesque fringilla. Donec vestibulum dapibus elit sed ultrices. Sed nec lacus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					
					<p>Quisque hendrerit tristique consectetur. Maecenas vulputate vehicula sapien, quis laoreet urna iaculis eget. Quisque egestas, sapien nec vulputate ornare, urna libero bibendum urna, nec blandit est augue lobortis sem. Phasellus in nulla at ipsum aliquet imperdiet. Nulla vehicula lectus a neque iaculis pellentesque. </p>
					
					
					<div class="clearfix"></div>
					<hr/>
					
					<div class="portfolio-tags"><strong>Tags</strong>: <a href="#">video</a>, <a href="#">design</a>, <a href="#">porsche</a>, <a href="#">911</a></div><!-- close .portfolio-tags -->
					
					<div class="social-networking-portfolio">
						<div class="google-plus">
							<!-- Place this tag where you want the +1 button to render -->
							<g:plusone size="medium" href="http://linkgoeshere"></g:plusone>
							<!-- Place this render call where appropriate -->
							<script type="text/javascript">
							(function() {
							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							po.src = 'https://apis.google.com/js/plusone.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							})();
							</script>
						</div>

						<div class="twitter-button"><a href="https://twitter.com/share" data-url="http://linkgoeshere" data-text="Check out this site" class="twitter-share-button" target="_blank">Share on Twitter</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>

						<div><a name="fb_share" type="button_count"  share_url="http://linkgoeshere" target="_blank">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>

						<div><iframe src="http://www.facebook.com/plugins/like.php?href=http://linkgoeshere&amp;layout=button_count&amp;show_faces=true&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=23" scrolling="no" allowtransparency="true" frameborder="0" style="border:none; overflow:hidden; width:85px; height:23px; background:transparent; margin-right:-15px;"></iframe></div>
					</div><!-- close .social-networking-portfolio -->
					
					
					<div class="clearfix"></div>
					
					
					
					<!-- if comments for portfolio -->
					<hr>
					
					<div id="comments">
						
						<h3 id="comments-title">3 comments</h2>


							<ol class="commentlist">
									<li class="comment byuser comment-author-progressionstudios bypostauthor even thread-even depth-1" id="li-comment-14">
							<article id="comment-14" class="comment">
								<div class="comment-meta">
									<div class="comment-author vcard">
										<img alt='' src='http://1.gravatar.com/avatar/ba52f9c3e9ebf4d37ffe96fc163ceaa4?s=68&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D68&amp;r=G' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn">ProgressionStudios</span> on <a href=""><time pubdate datetime="2011-09-07T15:32:38+00:00">September 7, 2011 at 3:32 pm</time></a> <span class="says">said:</span>
														</div><!-- .comment-author .vcard -->

								</div>

								<div class="comment-content"><p>Hi, this is a comment.<br />
					To delete a comment, just log in and view the post&#8217;s comments. There you will have the option to edit or delete them.</p>
					</div>

								<div class="reply">
									<a class='comment-reply-link' href=''>Reply <span>&darr;</span></a>			</div><!-- .reply -->
							</article><!-- #comment-## -->

						<ul class='children'>
						<li class="comment byuser comment-author-progressionstudios bypostauthor odd alt depth-2" id="li-comment-15">
							<article id="comment-15" class="comment">
								<div class="comment-meta">
									<div class="comment-author vcard">
										<img alt='' src='http://1.gravatar.com/avatar/ba52f9c3e9ebf4d37ffe96fc163ceaa4?s=39&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D39&amp;r=G' class='avatar avatar-39 photo' height='39' width='39' /><span class="fn">ProgressionStudios</span> on <a href=""><time pubdate datetime="2011-09-07T15:33:51+00:00">September 7, 2011 at 3:33 pm</time></a> <span class="says">said:</span>
														</div><!-- .comment-author .vcard -->


								</div>

								<div class="comment-content"><p>Replying to comments is simple. Try it out!</p>
					</div>

								<div class="reply">
									<a class='comment-reply-link' href=''>Reply <span>&darr;</span></a>			</div><!-- .reply -->
							</article><!-- #comment-## -->

						</li>
					</ul>
					</li>
						<li class="comment byuser comment-author-progressionstudios bypostauthor even thread-odd thread-alt depth-1" id="li-comment-16">
							<article id="comment-16" class="comment">
								<div class="comment-meta">
									<div class="comment-author vcard">
										<img alt='' src='http://1.gravatar.com/avatar/ba52f9c3e9ebf4d37ffe96fc163ceaa4?s=68&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D68&amp;r=G' class='avatar avatar-68 photo' height='68' width='68' /><span class="fn">ProgressionStudios</span> on <a href=""><time pubdate datetime="2011-09-07T15:35:31+00:00">September 7, 2011 at 3:35 pm</time></a> <span class="says">said:</span>
														</div><!-- .comment-author .vcard -->


								</div>

								<div class="comment-content"><p>Here is another sample comment. To delete a comment, just log in and view the post’s comments.</p>
					</div>

								<div class="reply">
									<a class='comment-reply-link' href=''>Reply <span>&darr;</span></a>			</div><!-- .reply -->
							</article><!-- #comment-## -->

						</li>
							</ol>
							
							<div class="clearfix"></div>



														<div id="respond">
									<h3 id="reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a></small></h3>
														<form action="#" method="post" id="commentform">
																								<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>							<p class="comment-form-author"><label for="author">Name</label> <span class="required">*</span><input id="author" name="author" type="text" value="" size="30" aria-required='true' /></p>
					<p class="comment-form-email"><label for="email">Email</label> <span class="required">*</span><input id="email" name="email" type="text" value="" size="30" aria-required='true' /></p>
					<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="text" value="" size="30" /></p>
																	<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						<p class="form-submit">
												<input name="submit" type="submit" id="submit" value="Post Comment" class="button" />
												<input type='hidden' name='comment_post_ID' value='115' id='comment_post_ID' />
					<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
											</p>
																</form>
												</div><!-- #respond -->

					</div><!-- #comments -->
					
					
					
				</div><!-- close .portfolio-single -->
	
			</div><!-- close .page-content -->
			
			
			
			
			<div class="clearfix"></div>
				
			
		</div><!-- close .content-container -->
		<div class="content-container-base-pagination">
		
			<div class="left-pagination"></div>
			<div class="right-pagination"></div>
			<div class="center-pagination"></div>
			<div class="clearfix"></div>
			
		</div><!-- close .content-container-base or .content-container-base-pagination -->
		
	</div><!-- close #main -->
	
	
	
<?php include("footer.php"); ?>