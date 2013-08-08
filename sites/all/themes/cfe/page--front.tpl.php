<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/slideshow.js'); ?>
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/jquery.easing.1.3.js'); ?>
<?php drupal_add_library('system', 'ui'); ?>

<!-- Top Navigation: Start -->
<?php //if ($logged_in): ?>
<?php require_once('nav.tpl.php');?>
<!-- Top Navigation: End -->

<!-- Body Contents: Start -->
<div class="wrapper">

		<!-- Slideshow: Start -->
		<div id="slideshow">


			<div id="slideshow_photos">
				<ul>
				<?php
					$slides = slideshow();
					$i = 1;
					foreach ($slides as $slide) {
						echo "\n".'<li id="slideshow_photo'.$i.'"><img src="'.$base_path.'images/featured/large/'.$slide['photo'].'" width="1000" border="0" /><span>';
						echo "\n".'<h2>'.htmlspecialchars($slide['title']).'</h2>';
						if (strlen($slide['subtitle']) > 0) echo "\n".'<h3>'.htmlspecialchars($slide['subtitle']).'</h3>';
						echo "\n".'<p>'.htmlspecialchars($slide['excerpt']);
						echo '<a href="'.$slide['readmore'].'" class="button" target="_blank">READ MORE</a></p>';
						echo "\n".'</span></li>';
						$i++;
					}
				?>
				</ul>
                <?php
                global $user;
                if($user->uid != 0){
                    echo ('<div id="ssAdmin"><input type="hidden" name="tokenForSSAdmin" id="tokenForSSAdmin" value='.$user->uid.'></div>');
                }
                ?>
			</div>

			<!-- Slideshow Controls: Start -->
			<div id="slideshow_controls">

				<!-- Slideshow Thumbnails: Start -->
				<div id="slideshow_controls_thumbnails">
					<ul>
					<?php
						$i = 1;
						foreach ($slides as $slide) {
							echo "\n".'<li id="slideshow_thumbnail'.$i.'"><span><img src="'.$base_path.'images/featured/thumb/'.$slide['thumbnail'].'" width="172" height="96" /><span class="whiteCircle"></span></span>';
							echo "\n".'<div class="caption">'.htmlspecialchars($slide['title']).'</div>';
							if ($i == 1) echo "\n".'<div id="selected"></div>';
							echo "\n".'<div class="slideTooltip"><div class="tooltipBody"></div><div class="tooltipArrow"></div></div></li>';
							$i++;
						}
					?>
					</ul>
				</div>
				<!-- Slideshow Thumbnails: End -->

			</div>
			<!-- Slideshow Controls: End -->
		</div>
		<!-- Slideshow: End -->

		<!-- Page Contents: Start -->
		<div id="page_contents" class="homepage">
			<aside>
				<?php print $page['sidebar_first'] ? render($page['sidebar_first']) : ''; ?>
			</aside>
			<div class="col_2">
				<?php print render($page['content']); ?>
			</div>
		</div>
		<!-- Page Contents: End -->

		<!-- Footer: Start -->
		<footer>
			<div class="footer_hr">
				<div class="footer_logo">
                    <a href="<?php print $base_path; ?>"><img src="<?php print $base_path; ?>img/cfe_footer_logo.png" border="0"></a>
                </div>
			</div>
			<div class="footer_content">&copy; <?php echo date('Y'); ?>, Center for Entrepreneurship. All Rights Reserved.<br><a href="http://www.regents.umich.edu/">The Regents of the University of Michigan</a> &nbsp; | &nbsp; <a href="<?php print $base_path . 'contact-us';?>">Contact Us</a><br><br><span style="font-size:0.9em">Center for Entrepreneurship is best viewed in the following web browsers:</span><br><br><img src="<?php print $base_path; ?>img/browser_compatibility.png" border=0><!-- &nbsp; | &nbsp; <a href="<?php print $base_path . 'faq';?>">Frequently Asked Questions</a>--></div>

		</footer>
		<!-- Footer: End -->
	</div>
</div>
<!-- Body Contents: End -->

<?php /* else:
    echo('<p style="align: center;">Please <a href="/sandbox/user/login">log in</a> to view this site.</p>');
 endif;
 */
?>
