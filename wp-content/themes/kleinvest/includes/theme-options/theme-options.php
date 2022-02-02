<?php

if ( ! defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настойки сайта')
         ->add_tab('Общие настройки', [
	         Field::make('text', 'site_title', 'Site title'),
         ])
         ->add_tab('Footer', [
	         Field::make('complex', 'social_media_list', 'Social Media List')
	              ->set_max(3)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('text', 'social_media_link', 'Social Media Link'),
		              Field::make('image', 'about_card_icon', 'Social Media Icon')
		                   ->set_value_type('url'),
	              )),
	         Field::make('complex', 'link_list', 'Link List')
	              ->set_max(4)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('text', 'link_item_title', 'Link Item Title'),
		              Field::make('complex', 'link_item_list', 'Link Item Link')
		                   ->set_max(6)
		                   ->set_min(1)
		                   ->add_fields(array(
			                   Field::make('text', 'link', 'Link'),
			                   Field::make('text', 'link_text', 'Link Text'),
		                   )),
	              )),

         ]);


	