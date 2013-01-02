<?php
// Description
$custom_meta_textarea = new WPAlchemy_MetaBox(array
(
	'id' => '_bc_slider_meta_descr_text',
	'title' => 'Slide Description',
	'template' => get_stylesheet_directory() . '/metaboxes/bc-slider-meta-textarea.php',
	'types' => array('bc-slider'),
	'hide_editor' => true,
	'context' => 'normal'
));

//Button Text
$custom_meta_text = new WPAlchemy_MetaBox(array
(
	'id' => '_bc_slider_meta_btn_text',
	'title' => 'Button Text',
	'template' => get_stylesheet_directory() . '/metaboxes/bc-slider-meta-text.php',
	'types' => array('bc-slider'),
	'context' => 'side'
));

//Slider images
$custom_meta_media = new WPAlchemy_MetaBox(array
(
	'id' => '_bc_slider_meta_media',
	'title' => 'Add media',
	'template' => get_stylesheet_directory() . '/metaboxes/bc-slider-meta-media.php',
	'types' => array('bc-slider'),
	'context' => 'normal'
));
