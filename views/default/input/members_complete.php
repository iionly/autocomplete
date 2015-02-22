<?php
	echo elgg_view('input/autocomplete', array(
		'mustMatch' => 'true',
		'minChars' => $vars['minChars'],
		'name' => $vars['name'],
		'id' => $vars['id'],
		'value' => $vars['value'],
		'title' => $vars['title'],
		'class' => $vars['class'],
		'width' => $vars['width'],
		'lookup_url' => elgg_get_site_url().'mod/autocomplete/members_complete.php'
	));
?>