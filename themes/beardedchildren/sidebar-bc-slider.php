<?php

	wp_enqueue_script('bc=slider-js', get_template_directory_uri().'/js/bc-slider.js');

	$args = array( 'post_type' => 'bc-slider', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	
	// count number of existing slides
	$num_slides = wp_count_posts('bc-slider')->publish; 
	
?>

<div class='bc-slider-mask'>
<div class='bc-slider-container'>
	<!-- width determined by $num_slides -->
	<ul class='slides-list' style='width: <?php echo 890 * $num_slides; ?>px;'>

<?php
	
	$count = 1;

	while ( $loop->have_posts() ) : $loop->the_post();
		
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
		<li>
		<div class='bc-slider-box-<?php echo $count ?> bc-slider-box' style='background: url("<?php $custom_meta_media->the_value('main-slide-img'); ?>");'>
		
			<div class='bc-slider-sidebar bc-slider-sidebar-<?php echo $count; ?>'>
			
				<img src='<?php $custom_meta_media->the_value('sidebar-img'); ?>' />
				<p class='bc-slider-description'><?php $custom_meta_textarea->the_value('description'); ?></p>
				<button class='bc-slider-button' onclick="window.location.href='<?php $custom_meta_text->the_value('link'); ?>'"><?php $custom_meta_text->the_value('btn'); ?></button>
			
			</div><!-- end .bc-slider-sidebar .bc-slider-sidebar-<?php echo $count; ?> -->
			
		</div> <!-- end .bc-slider-box-<?php echo $count ?> -->
		</li>
	<?php $count++; ?>
	<?php endwhile; ?>
	</ul> <!-- end .slides-list -->
</div><!-- end .bc-slider-container -->
</div><!-- end .bc-slider-mask -->

<!-- navigation -->
<div class='bc-slider-nav-container'>
	
	<span class='bc-slider-nav-text bc-slider-nav-prev'>&lang;</span>
	
	<?php
	
	$nav_count = 1;
	while($nav_count <= $num_slides) {
		echo '<span class="bc-slider-nav-text nav-circle-'.$nav_count.'" onclick="bcChangeSlide(\'slide-'.$nav_count.'\');" >&bull;</span>';
		$nav_count++;
	}
	
	?>
	
	<span class='bc-slider-nav-text bc-slider-nav-next'>&rang;</span>
	
</div>