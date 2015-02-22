<?php

elgg_register_event_handler('init', 'system', 'autocomplete_init');

function autocomplete_init() {
	elgg_register_library('elgg:autocomplete', elgg_get_plugins_path() . 'autocomplete/models/model.php');

	elgg_extend_view('css/elgg','autocomplete/css');

	$autocomplete_js = elgg_get_simplecache_url('js', 'autocomplete/jquery.autocomplete.pack.js');
	elgg_register_simplecache_view('js/autocomplete/jquery.autocomplete.pack.js');
	elgg_register_js('elgg.autocomplete', $autocomplete_js);
}
