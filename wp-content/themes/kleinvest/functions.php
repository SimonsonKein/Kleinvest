<?php

use Carbon_Fields\Carbon_Fields;

add_action('after_setup_theme', 'crb_load');
function crb_load() {
	require_once('includes/carbon-fields/vendor/autoload.php');
	Carbon_Fields :: boot();
}


add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
	require_once ('includes/theme-options/theme-options.php');
	require_once ('includes/theme-options/post-meta.php');
}

add_action('after_setup_theme', 'theme_support');
function theme_support() {
	register_nav_menu('nav_main_header', 'Меню в шапке');
}
