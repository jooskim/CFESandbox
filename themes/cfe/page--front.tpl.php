<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/slideshow.js'); ?>
<?php drupal_add_library('system', 'ui'); ?>

<!-- Top Navigation: Start -->

<div id="top-nav">
	<div id="top_nav_contents"> <span id="logo"><a href="<?php print $base_path; ?>">Center for Entrepreneurship</a></span>
		<div id="top_links"><a href="http://www.engin.umich.edu/" target="_blank"><img src="<?php print $base_path . $directory; ?>/css/components/logo-coe.png" alt="University of Michigan - College of Engineering" width="122" height="16" border="0"></a> | <a href="http://eepurl.com/lij3b" target="_blank">Subscribe to CFE Newsletter</a></div>
		<div id="nav">
			<?php
      echo theme('links__system_main_menu', array('links' => $main_menu));
      ?>
		</div>
	</div>
</div>
<!-- Top Navigation: End --> 

<!-- Body Contents: Start -->
<div id="body_contents">
	<div id="wrapper">
		<div id="slideshow_shadow_special"></div>
		
		<!-- Slideshow: Start -->
		
		<div id="slideshow">
			<div id="slideshow_shadow_top"></div>
			<div id="slideshow_photos">
				<ul>
				<?php $slides = slideshow(); ?>
<?php
	$i = 1;
	foreach ($slides as $slide) {
		echo "\n".'<li id="slideshow_photo'.$i.'"><img src="'.$base_path.'images/featured/large/'.$slide['photo'].'" width="960" height="300" border="0" /><span>';
		echo "\n".'<h2>'.htmlspecialchars($slide['title']).'</h2>';
		if (strlen($slide['subtitle']) > 0) echo "\n".'<h3>'.htmlspecialchars($slide['subtitle']).'</h3>';
		echo "\n".'<p>'.htmlspecialchars($slide['excerpt']);
		echo '<a href="'.$slide['readmore'].'" class="button" target="_blank">READ MORE</a></p>';
		echo "\n".'</span></li>';
		$i++;
	}
?>
				</ul>
			</div>
			<div id="slideshow_shadow_bottom"></div>
			
			<!-- Slideshow Controls: Start -->
			<div id="slideshow_controls">
				<div id="slideshow_controls_shadow_top"></div>
				
				<!-- Slideshow Thumbnails: Start -->
				<div id="slideshow_controls_thumbnails">
					<ul>
<?php
	$i = 1;
	foreach ($slides as $slide) {
		echo "\n".'<li id="slideshow_thumbnail'.$i.'"><span><img src="'.$base_path.'images/featured/thumb/'.$slide['thumbnail'].'" width="172" height="96" /></span>';
		echo "\n".'<div class="caption">'.htmlspecialchars($slide['title']).'</div>';
		if ($i == 1) echo "\n".'<div id="selected"></div>';
		echo "\n".'</li>';
		$i++;
	}
?>
					</ul>
				</div>
				<!-- Slideshow Thumbnails: End -->
				
				<div id="slideshow_controls_shadow_bottom"></div>
			</div>
			<!-- Slideshow Controls: End -->
		</div>
		<!-- Slideshow: End --> 
		
		<!-- Page Contents: Start -->
		<div id="page_contents" class="homepage">
			<div class="col_2">
				<div class="col_2" id="feature_blog">
				<?php $blog = latest_blog(); ?>
					<div class="pad"><img src="<?php print $base_path; ?>images/blog/<?php echo $blog[0]['author']; ?>-cfe.jpg" width="125" height="165" border="0" align="left" class="photo" style="margin-right:15px; margin-top:5px;">
						<h2><?php echo $blog[0]['blog_name'] ?></h2>
						<br />
						<h3><a href="<?php echo $blog[0]['guid']; ?>" target="_blank"><?php echo $blog[0]['post_title'] ?></a></h3>
						<!--
						<h2><a href="<?php echo $blog[0]['guid']; ?>" target="_blank"><?php echo $blog[0]['post_title'] ?></a></h2>
						<br />
						<h3 style="display:inline-block;"><?php echo $blog[0]['author_name'] ?></h3><em> on <?php echo date("F j, Y ", strtotime($blog[0]['post_date'])); ?></em> <br />
						-->
						<p><?php echo substr(strip_tags($blog[0]['post_content']), 0, strrpos(substr(strip_tags($blog[0]['post_content']), 0, 280), ' ')) . '...'; ?></p>
						<p><a href="<?php echo $blog[0]['guid']; ?>" class="button" style="float:right;" target="_blank">READ MORE</a><br /></p>
					</div>
				</div>
				<div class="col_1" id="staff_reco" style="background-color:#EFEFEF;-moz-box-shadow:0 0 8px 0 #999;-webkit-box-shadow:0 0 8px 0 #999;box-shadow:0 0 8px 0 #999;">
					<div class="pad">
						<?php //print render($page['content']); ?>
						<iframe id="ytplayer" type="text/html" width="270" height="160" src="http://www.youtube.com/embed/o2hOSDRNN8o?autoplay=0&amp;autohide=1&amp;rel=0" frameborder="0"></iframe>
						Have you heard about our new Master of Entrepreneurship program?
					</div>
				</div>
				<div class="col_1" id="blog_2">
					<div class="pad">
						<h2><?php echo $blog[1]['blog_name'] ?></h2>
						<img src="<?php print $base_path; ?>images/blog/<?php echo $blog[1]['author']; ?>-cfe-small.jpg" width="80" height="105" border="0" align="left" class="photo" style="margin-right:10px; margin-top:10px;"><h3 style="margin-top:7px;"><a href="<?php echo $blog[1]['guid']; ?>" target="_blank"><?php echo $blog[1]['post_title'] ?></a></h3>
						<p><?php echo substr(strip_tags($blog[1]['post_content']), 0, strrpos(substr(strip_tags($blog[1]['post_content']), 0, 120), ' ')) . '...'; ?></p>
						<p><a href="<?php echo $blog[1]['guid']; ?>" class="button" style="float:right;" target="_blank">READ MORE</a><br /></p>
					</div>
				</div>
			</div>
			<div class="col_1">
				<div class="col_1" id="special_col_home">
					<div class="pad">
						<?php if (function_exists('twitter_pull_render')) { print twitter_pull_render('@umcfe', 'Twitter', 4); } ?>
					<a href="https://twitter.com/#!/UMCFE" class="button" style="float:right;" target="_blank">MORE TWEETS</a><br />
					</div>
				</div>
			</div>
		</div>
		<!-- Page Contents: End --> 
		
		<!-- Footer: Start -->
		<div id="footer">
			<div id="footer_shadow_top"></div>
			<div id="footer_col_1" class="footer_col"><a href="<?php print $base_path; ?>"><img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-mono.png" width="96" height="35" border="0"></a>
				<p><br />
					<br />
				</p>
			</div>
			<div id="footer_col_2" class="footer_col">
				<p>
					<?php
            $links = sub_menu_links('main-menu', 'node/19');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br />\n";
							$i++;
            }
          ?>
				</p>
			</div>
			<div id="footer_col_3" class="footer_col">
				<p>
					<?php
            $links = sub_menu_links('main-menu', 'node/29');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br />\n";
							$i++;
            }
          ?>
					<br />
					<?php
            $links = sub_menu_links('main-menu', 'node/40');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br />\n";
							$i++;
            }
          ?>
				</p>
			</div>
			<div id="footer_col_4" class="footer_col">
				<p>
					<?php
            $links = sub_menu_links('main-menu', 'node/31');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br />\n";
							$i++;
            }
          ?>
					<br />
					<?php
            $links = sub_menu_links('main-menu', 'node/14');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br />\n";
							$i++;
            }
          ?>
					<br />
					<?php /*
            $links = sub_menu_links('main-menu', 'node/43');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br />\n";
							$i++;
            } */
          ?>
				</p>
			</div>
			<div id="footer_col_5" class="footer_col"> <img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-spark.png" width="132" height="143" border="0"></div>
			<div id="footer_shadow_bottom"></div>
			<div id="footer_copyright"><a href="http://www.regents.umich.edu/">&copy; <?php echo date('Y'); ?>, The Regents of the University of Michigan</a> &nbsp; | &nbsp; <a href="<?php print $base_path . 'contact-us';?>">Contact Us</a><!-- &nbsp; | &nbsp; <a href="<?php print $base_path . 'faq';?>">Frequently Asked Questions</a>--></div>
		</div>
		<!-- Footer: End -->
	</div>
</div>
<!-- Body Contents: End --> 
