<?php

	$args = array( 'post_type' => 'bc-slider', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();
	
		the_title();
		print_r('</br>');
	
		global $custom_meta_btn_text;
		$custom_meta_btn_text->the_meta();
		$custom_meta_btn_text->the_value('btn');
		print_r('</br></br>');
			
		global $custom_meta_media;
		$custom_meta_media->the_meta();
		$custom_meta_media->the_value('main-slide-img');
		print_r('</br>');
		$custom_meta_media->the_value('sidebar-img');
		print_r('</br></br>');
			
	endwhile;