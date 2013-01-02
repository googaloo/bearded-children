<?php

/*
 * 
 * Description: What up, this is the BC TEMPALTE Y'AAALLLLL!!!
 * 
 */

?>

<?php get_header(); ?>

<div class='home-content-slider'>
    
      <?php //echo do_shortcode("[cycloneslider id='minecraftmania' template='Default']"); ?>
	<?php
	
	$args = array( 'post_type' => 'bc-slider', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	the_title();
	print_r('</br>');
	


			global $custom_meta_btn_text;
			$custom_meta_btn_text->the_meta();
			$custom_meta_btn_text->the_field('btn');
			$custom_meta_btn_text->the_value();
			print_r('</br></br>');
			
			global $custom_meta_media;
			$custom_meta_media->the_meta();
			$custom_meta_media->the_value('main-slide-img');
			print_r('</br>');
			$custom_meta_media->the_value('sidebar-img');
			print_r('</br></br>');
			
		  endwhile;
		   
		  ?>
    
</div>



<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php the_title(); ?><br/>
        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>