<?php

if ( ! defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
         ->show_on_page(19)
         ->add_tab('Первый экран', [
	         Field::make('text', 'tagline_txt', 'Слоган'),
	         Field::make('text', 'quote', 'Подтекст '),
	         Field::make('text', 'features_title', 'Features Title'),
	         Field::make('text', 'features_subtitle', 'Features Subtitle'),
	         Field::make('complex', 'features_slider', __('Features List'))
	              ->set_max(9)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('image', 'feature_icon', 'Feature Icon')
		                   ->set_value_type('url'),
		              Field::make('text', 'feature_title', 'Feature Title'),
		              Field::make('text', 'feature_subtitle', 'Feature Subtitle'),
	              )),
	         Field::make('text', 'testimonials_title', 'Testimonials Title'),
	         Field::make('text', 'testimonials_subtitle', 'Testimonials Subtitle'),
	         Field::make('complex', 'testimonials_slider', 'Testimonials List')
	              ->set_max(6)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('image', 'testimonials_card_icon', 'Testimonials Card Icon')
		                   ->set_value_type('url'),
		              Field::make('text', 'testimonials_card_name', 'Testimonials Card Name'),
		              Field::make('text', 'testimonials_card_job', 'Testimonials Card Job'),
		              Field::make('text', 'testimonials_card_stars', 'Testimonials Card Stars')
		                   ->set_attribute('type', 'number')
		                   ->set_attribute('step', '0.5')
		                   ->set_attribute('max', '5')
		                   ->set_attribute('min', '0'),
		              Field::make('text', 'testimonials_card_description', 'Testimonials Card Description'),
	
	              )),
	         Field::make('text', 'about_title', 'About Title'),
	         Field::make('text', 'about_subtitle', 'About Subtitle'),
	         Field::make('media_gallery', 'about_video', 'About Video')
	              ->set_type('video'),
	
	         Field::make('text', 'about_video_description_title', 'About Video Description Title'),
	         Field::make('text', 'about_video_description_subtitle', 'About Video Description Subtitle'),
	         Field::make('complex', 'about_card_list', 'About Card List')
	              ->set_max(3)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('image', 'about_card_icon', 'About Card Icon')
		                   ->set_value_type('url'),
		              Field::make('text', 'about_card_title', 'About Card Title'),
		              Field::make('text', 'about_card_subtitle', 'About Card Subtitle'),
	              )),
	
	         Field::make('text', 'pricing_title', 'Pricing Title'),
	         Field::make('text', 'pricing_subtitle', 'Pricing Subtitle'),
	         Field::make('complex', 'pricing_card_list', 'Pricing Card List')
	              ->set_max(3)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('text', 'pricing_card_title', 'Pricing Card Title'),
		              Field::make('text', 'pricing_card_subtitle', 'Pricing Card Subtitle'),
		              Field::make('text', 'pricing_card_price', 'Pricing Card Price')
		                   ->set_attribute('type', 'number')
		                   ->set_attribute('min', '0'),
		              Field::make('select', 'pricing_card_period', 'Pricing Card Period')
		                   ->set_options(array(
			                   'Per Day'   => 'Day',
			                   'Per Month' => 'Month',
			                   'Per Year'  => 'Year',
		                   )),
		              Field::make('complex', 'pricing_card_adv', 'Pricing Card Advantages')
		                   ->set_max(6)
		                   ->set_min(1)
		                   ->add_fields(array(
			                   Field::make('select', 'is_adv', 'Select')
			                        ->set_width(50)
			                        ->set_options(array(
				                        'is_adv'    => 'Adv',
				                        'is_disadv' => 'Disadv',
			                        )),
			                   Field::make('text', 'pricing_card_adv_text', 'Pricing Card Advantages Text')
			                        ->set_width(50),
		                   )),
	              )),
	         Field::make('text', 'contact_title', 'Contact Title'),
	         Field::make('text', 'contact_subtitle', 'Contact Subtitle'),
	         Field::make('complex', 'contact_card_list', 'Contact Card List')
	              ->set_max(3)
	              ->set_min(1)
	              ->add_fields(array(
		              Field::make('image', 'contact_card_icon', 'Contact Card Icon')
		                   ->set_value_type('url'),
		              Field::make('complex', 'contact_mails', 'Contact Card Mails')
		                   ->set_max(2)
		                   ->set_min(1)
		                   ->add_fields(array(
			                   Field::make('text', 'contact_mail', 'Contact Card Mail'),
		                   )),
	              )),
         ]);
