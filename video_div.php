<?php
			$video= $_GET["video"];
			$xml= $_GET["xml"];
			$xml=simplexml_load_file($xml);
			foreach ($xml->children() as $item){
			if ($item->contentId == $video) {
				$mydate = strtotime($item->date);
							if ($mydate) {
								$mydate=date('F jS Y', $mydate);
							}
			echo '<div id="showcase" class="showcase">
				
				<!-- START SLIDE .showcase-slide-->
				<div class="showcase-slide">
					<div class="showcase-content">
						<div class="slider-left">
							<iframe src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="560" height="315" frameborder="0"></iframe>
						</div><!-- close .slider-left -->
						<div class="slider-right">
							<h2>'.$item->title.'</h2>
							<div class="post-details-slider">'.$mydate.'</div>
							<p>'.$item->synopsis.'</p>
							<div class="more-link-slider"><a href="" class="button">Watch Now &rsaquo;</a> <span>or <a href="#">Join Discussion</a></span></div>
						</div><!-- close .slider-right -->
					</div>
			</div>';
			break;
			}
			}
			?>