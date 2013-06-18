<!DOCTYPE html>
<html class="no-js">
<head profile="<?php print $grddl_profile; ?>">
	<?php print $head; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<title><?php print $head_title; ?></title>
    <!--[if IE 8]>
    <script src="<?=drupal_get_path('theme','cfe').'/js/css3-mediaqueries.js';?>"></script>
    <script src="<?=drupal_get_path('theme','cfe').'/js/html5shiv.js';?>"></script>
    <script src="<?=drupal_get_path('theme','cfe'),'/js/jquery.cookies.2.2.0.min.js';?>"></script>

    <![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,700,300italic|Yanone+Kaffeesatz:300,200' rel='stylesheet' type='text/css'>
	<?php print $styles; ?>
	<?php print $scripts; ?>
</head>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<body class="no-js ie8 <?php print $classes; ?>" <?php print $attributes;?>>

<![endif]-->
<!--[if gt IE 8]><!--> 
<body class="no-js <?php print $classes; ?>" <?php print $attributes;?>>
<!--<![endif]-->
	<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	</div>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
</body>
</html>