<?php

	wp_enqueue_script('bc-slider.js', get_template_directory_uri().'/js/bc-slider.js');

	$args = array( 'post_type' => 'bc-slider', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	
	// count number of existing slides
	$num_slides = wp_count_posts('bc-slider')->publish; 
	
?>

<!-- navigation -->
<div class='bc-slider-nav-container'>
	
	<span class='bc-slider-nav-text bc-slider-nav-prev'>&lang;</span>
	
	<?php
	
	$nav_count = 1;
	while($nav_count <= $num_slides) {
		echo '<span class="bc-slider-nav-text nav-circle" data-seq="'.$nav_count.'" >&bull;</span>';
		$nav_count++;
	}
	
	?>
	
	<span class='bc-slider-nav-text bc-slider-nav-next'>&rang;</span>
	
</div><!-- end .bc-slider-nav-container -->

<div class='bc-slider-mask'>
<div class='bc-slider-container'>
	<!-- width determined by $num_slides -->
	<ul class='slides-list' style='width: <?php echo (890 * $num_slides) + 1780; ?>px;'>

<?php
	
	$count = 1;

	while ( $loop->have_posts() ) : $loop->the_post();

		$main_img = get_post_meta ( get_the_id(), 'wpcf-main-image', true );
		$sidebar_img = get_post_meta ( get_the_id(), 'wpcf-slider-sidebar-img', true );
		$btn_url = get_post_meta ( get_the_id(), 'wpcf-slider-btn-url', true );
		$btn_txt = get_post_meta ( get_the_id(), 'wpcf-slider-btn-text', true );
			
?>
		<li>
		<div class='bc-slider-box-<?php echo $count; ?> bc-slider-box' style='background: url("<?php echo $main_img; ?>");'>
		
			<div class='bc-slider-sidebar bc-slider-sidebar-<?php echo $count; ?>'>

				<img src='<?php echo $sidebar_img; ?>' />
				<p class='bc-slider-description'><?php the_content(); ?></p>
				<button class='bc-slider-button' onclick="window.location.href='<?php echo $btn_url; ?>'"><?php echo $btn_txt; ?></button>
			
			</div><!-- end .bc-slider-sidebar .bc-slider-sidebar-<?php echo $count; ?> -->
			
		</div> <!-- end .bc-slider-box-<?php echo $count ?> -->
		</li>
		
	<?php $count++; ?>
	<?php endwhile; // end loop ?>
	</ul> <!-- end .slides-list -->
</div><!-- end .bc-slider-container -->
</div><!-- end .bc-slider-mask -->

