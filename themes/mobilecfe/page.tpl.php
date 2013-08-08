<?php
function mobilecfe_js_alter(&$js) {
    if (isset($js['misc/jquery.js'])) {
        $jquery_path = 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js';
        $js['misc/jquery.js']['data'] = $jquery_path;
        $js['misc/jquery.js']['version'] = '1.8.0';
        $js['misc/jquery.js']['type'] = 'external';

    }

}
?>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="<?php echo($front_page).'themes/mobilecfe/jquerymobile/jquery.mobile-1.3.2.css';?> " />
<?php drupal_add_js(drupal_get_path('theme','mobilecfe') . '/scripts/scripts.js'); ?>
<?php drupal_add_library('system', 'ui'); ?>

<div data-role="page">
    <!-- start of page.tpl.php template -->
<!-- Top Navigation: Start -->
<?php //if ($logged_in): ?>
<?php require_once('nav.tpl.php');?>
<!-- Top Navigation: End -->

<!-- Body Contents: Start -->
<div class="wrapper">

		<!-- Page Contents: Start -->
		<div id="page_contents" class="homepage">
            <div class="padding-for-contents">
                <!--
                <aside>
                    <?php print $page['sidebar_first'] ? render($page['sidebar_first']) : ''; ?>
                </aside>
                -->
                <div class="col_2">
                    <?php print render($page['content']); ?>
                </div>
            </div>
		</div>
        <div id="navigation">
            <?php print render($page['header']); ?>
        </div>
		<!-- Page Contents: End -->

		<!-- Footer: Start -->
    <div data-role="footer" class="ui-bar" style="font-size:0.63em; text-align:center;">
        <br><div data-role="controlgroup"><a href="http://www.regents.umich.edu/">The Regents of the University of Michigan</a><a href="<?php print $base_path . 'contact-us';?>">Contact Us</a></div><br><span style="padding-top:10px;">&copy; <?php echo date('Y'); ?>, Center for Entrepreneurship. All Rights Reserved.</span></div>
</div>
    <!--
		<footer>

            <div class="footer_content" style="font-size:0.5em"><a href="/sandbox/" data-ajax="false" title="Center for Entrepreneurship"><img src="http://www.cfe.umich.edu/img/cfe_footer_logo.png" style="width:80px" border=0></a><br><br>&copy; <?php echo date('Y'); ?>, Center for Entrepreneurship. All Rights Reserved.<br><a href="http://www.regents.umich.edu/">The Regents of the University of Michigan</a> &nbsp; | &nbsp; <a href="<?php print $base_path . 'contact-us';?>">Contact Us</a><br></div><div class="footer_content"><a href="/sandbox/" data-ajax="false" title="Center for Entrepreneurship"><img src="http://www.cfe.umich.edu/sites/all/themes/cfe/css/components/cfe-newlogo.png" border=0></a><br><br>&copy; <?php echo date('Y'); ?>, Center for Entrepreneurship. All Rights Reserved.<br><a href="http://www.regents.umich.edu/">The Regents of the University of Michigan</a> &nbsp; | &nbsp; <a href="<?php print $base_path . 'contact-us';?>">Contact Us</a><br></div>

		</footer>
		-->
    <!-- Footer: End -->
		<!-- Footer: End -->
	</div>
</div>
<!-- Body Contents: End -->
</div>
<?php /* else:
    echo('<p style="align: center;">Please <a href="/sandbox/user/login">log in</a> to view this site.</p>');
 endif;
 */
?>
