<?php drupal_add_js('http://code.jquery.com/color/jquery.color-2.1.2.min.js'); ?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_library('system', 'ui'); ?>

<!-- Top Navigation: Start -->
<?php require_once('nav.tpl.php');?>
<!-- Top Navigation: End -->

<!-- Body Contents: Start -->
<div class="wrapper">
		<div id="slideshow_shadow_special"></div>

		<!-- Page Contents: Start -->
		<div id="page_contents">
			<?php if ($page['sidebar_first']): ?>
				<div class="col_1">
					<?php print render($page['sidebar_first']); ?>
				</div>
				<div class="col_2">
			<?php endif; ?>
			<?php if (!empty($content['field_image'])):?>
				<div class="feature_photo">
					<?php print render($content['field_image']); ?>
					<h2 class="title" id="page-title"><?php print $title; ?></h2>
				</div>
			<?php else: ?>
				<?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
			<?php endif; ?>
			<?php if ($messages): ?>
				<div id="messages"><?php print $messages; ?></div>
			<?php endif; ?>
			<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($page['content']); ?>
			<?php if ($page['sidebar_first']): ?>
				</div>
			<?php endif; ?>
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
<?php
// Show the direct edit buttons only when a user is logged in
// show the edit buttons on the Classes page only to those who are logged in
if($logged_in){
    echo("<script>jQuery('document').ready(function(){
    jQuery('.editShortcutContainer').show();
    jQuery('.editBtnContainer').show();

    });</script>");

}
echo("<script>

var filteredURL;
var loc = location.href.split('/');


if(loc[loc.length-1].indexOf('Fall')!=-1){
    //$('#check1').next('label').addClass('ui-state-active');
    $('#check1').attr('checked','checked');
    $('#valFall').val('Fall');
}
if(loc[loc.length-1].indexOf('Winter')!=-1){
    //$('#check2').next('label').addClass('ui-state-active');
    $('#check2').attr('checked','checked');
    $('#valWinter').val('Winter');
}
if(loc[loc.length-1].indexOf('Spring')!=-1){
    //$('#check3').next('label').addClass('ui-state-active');
    $('#check3').attr('checked','checked');
    $('#valSpring').val('Spring');
}
if(loc[loc.length-1].indexOf('Summer')!=-1){
    //$('#check4').next('label').addClass('ui-state-active');
    $('#check4').attr('checked','checked');
    $('#valSummer').val('Summer');
}

$('#format').buttonset();$('#runFilter').button();
$('#format label').each(function(){
    $(this).click(function(){

        if($(this).attr('for')=='check1'){
            if($(this).hasClass('ui-state-active')==false){
                $('#format input[id=valFall]').val('Fall');
            }else{
                $('#format input[id=valFall]').val(0);
            }
        }else if($(this).attr('for')=='check2'){
            if($(this).hasClass('ui-state-active')==false){
                $('#format input[id=valWinter]').val('Winter');
            }else{
                $('#format input[id=valWinter]').val(0);
            }
        }else if($(this).attr('for')=='check3'){
            if($(this).hasClass('ui-state-active')==false){
                $('#format input[id=valSpring]').val('Spring');
            }else{
                $('#format input[id=valSpring]').val(0);
            }
        }else if($(this).attr('for')=='check4'){
            if($(this).hasClass('ui-state-active')==false){
                $('#format input[id=valSummer]').val('Summer');
            }else{
                $('#format input[id=valSummer]').val(0);
            }
        }
    });
});


$('#runFilter').click(function(){
    filteredURL = '';
    $('#format input[type=hidden]').filter(function(index){
        return ($(this).val() != 0);
    }).each(function(){
        filteredURL += 'field_semester_value%5B%5D='+$(this).val()+'&';
    });
    //alert(filteredURL);
    location.href='classes?'+filteredURL;

});


</script>");

?>
<!-- Body Contents: End -->
