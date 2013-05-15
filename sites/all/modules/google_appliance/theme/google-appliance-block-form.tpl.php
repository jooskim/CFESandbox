<?php
// $Id$
/**
 * @file
 *    default theme implementation for the search block form
 * variables of interest
 * - variables['form'] : the form elements array, pre-render
 * - variables['block_search_form']['hidden'] : hidden form elements collapsed + rendered
 * - variables['block_serach_form'] : form elements rendered and keyed by original form keys
 * - variables['block_search_form_complete'] : the entire form collapsed and rendered
 *
 * @see template_preprocess_google_appliance_block_form()
 */
//dsm($variables);
?>
<div class="search-container-outside">
  <div id="search-container" class="search-container-inside">
  	<a href="/gsearch">Search <i class="icon-search"></i></a>
  	<?php print $block_search_form_complete; ?>
  </div>
</div>
