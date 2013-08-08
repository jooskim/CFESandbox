<!DOCTYPE html>
<html class="no-js">
<head profile="<?php print $grddl_profile; ?>">
	<?php print $head; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
    <?php print $scripts; ?>

</head>

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