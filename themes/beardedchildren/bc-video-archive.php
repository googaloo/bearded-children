<?php

/* Template Name: BC Video Archive */

?>

<?php get_header(); ?>

<h1>Channels</h1>

<div class='channel_container'>
	
<?php
	
	$channel_args = array( 'post_type' => 'bc-channel', 'posts_per_page' => 10 );
	$channel_loop = new WP_Query( $channel_args );
	
	if ( $channel_loop->have_posts() ) : ?>
		
		<?php while ( $channel_loop->have_posts() ) : $channel_loop->the_post(); ?>
	
	<div class='channel-box channel-<?php echo get_the_id(); ?>'>
	
	
	
	</div>

		<?php endwhile; ?> 
	
	<?php endif; ?>

	
	    
</div><!-- end .channel_container -->


<?php

$args = array( 'post_type' => 'bc-videos', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );

if ( $loop->have_posts() ) : 
	
	while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<?php 
		
		$meta_channel = get_post_meta(get_the_id(), 'wpcf-channel', true); 
		$meta_descr = get_post_meta(get_the_id(), 'wpcf-description', true); 
	
		?>
		
		<p>Channel: <?php echo $meta_channel; ?></p>
		<p>Description: <?php echo $meta_descr; ?></p>
		
	<?php endwhile;

endif; ?>

<?php wp_reset_query(); ?>


<?php get_sidebar(); ?>
<?php get_footer(); 
