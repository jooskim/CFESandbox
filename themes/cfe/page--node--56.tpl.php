<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
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
		
		<!-- Page Contents: Start -->
		<div id="page_contents">
			<div class="single_col">
				<div class="pad">
					<?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
					<?php print render($page['content']); ?> </div>
			</div>
		</div>
		<!-- Page Contents: End -->

		<!-- Footer: Start -->
		<div id="footer">
			<div id="footer_shadow_top"></div>
			<div id="footer_col_1" class="footer_col"><a href="<?php print $base_path; ?>"><img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-mono.png" width="96" height="35" border="0"></a>
				<p><br>
					<br>
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
							echo "<br>\n";
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
							echo "<br>\n";
							$i++;
            }
          ?>
					<br>
					<?php
            $links = sub_menu_links('main-menu', 'node/40');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
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
							echo "<br>\n";
							$i++;
            }
          ?>
					<br>
					<?php
            $links = sub_menu_links('main-menu', 'node/14');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
					<br>
					<?php /*
            $links = sub_menu_links('main-menu', 'node/43');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
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