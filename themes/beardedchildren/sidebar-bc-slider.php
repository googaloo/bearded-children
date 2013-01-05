<?php

	wp_enqueue_script(scripts/bc-slider.js);

	$args = array( 'post_type' => 'bc-slider', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	
?>

<div class='bc-slider-mask'>
<div class='bc-slider-container'>

<?php
	
	$count = 1;

	while ( $loop->have_posts() ) : $loop->the_post();
	
		// count number of existing slides
		$num_slides = wp_count_posts('bc-slider')->publish; 
		
		// Button Text and Link /////
		global $custom_meta_text;
		$custom_meta_text->the_meta();
		
		// Main Slide and Sidebar Image
		global $custom_meta_media;
		$custom_meta_media->the_meta();
		
		// Description
		global $custom_meta_textarea;
		$custom_meta_textarea->the_meta();
			
?>
		
		<div class='bc-slider-box-<?php echo $count ?> bc-slider-box'>
		
			<div class='bc-slider-sidebar bc-slider-sidebar-<?php echo $count; ?>' style='background: url("<?php echo $custom_meta_media->the_value('main-slide-img'); ?>");'>
			
				<img src='<?php echo $custom_meta_media->the_value('sidebar-img'); ?>' />
				<p class='bc-slider-description'><?php $custom_meta_textarea->the_value('description'); ?></p>
				<button class='bc-slider-button' onclick="window.location.href='<?php $custom_meta_text->the_value('link'); ?>'"><?php $custom_meta_text->the_value('btn'); ?></button>
			
			</div><!-- end .bc-slider-sidebar .bc-slider-sidebar-<?php echo $count; ?> -->
			
		</div> <!-- end .bc-slider-box-<?php echo $count ?> -->
	
	<?php $count++; ?>
	<?php endwhile; ?>

</div><!-- end .bc-slider-container -->
</div><!-- end .bc-slider-mask -->