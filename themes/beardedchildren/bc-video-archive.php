<?php

/* Template Name: BC Video Archive */

?>

<?php get_header(); ?>

<h1>Channels</h1>
<<<<<<< HEAD

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
=======
>>>>>>> Fixing missing repo?

<div class='channel_container'>
	
	<?php
	$num_channels=wp_count_posts('bc-channel')->publish;
	$args = array('post_type' => 'bc-channel');
	$channel = get_posts($args);

<<<<<<< HEAD
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<?php 
		
		$meta_channel = get_post_meta(get_the_id(), 'wpcf-channel', true); 
		$meta_descr = get_post_meta(get_the_id(), 'wpcf-description', true); 
	
		?>
		
		<p>Channel: <?php echo $meta_channel; ?></p>
		<p>Description: <?php echo $meta_descr; ?></p>
		
	<?php endwhile;
=======
	for($i=1; $i<=$num_channels; $i++): ?>

		<h2><?php echo $channel[$i-1]->post_title; ?></h2>
		<div><?php echo get_the_post_thumbnail($channel[$i-1]->ID, 'thumbnail'); ?></div>
>>>>>>> Fixing missing repo?

		<?php
		$skits_loop = new WP_Query(array('post_type'=>'bc-videos'));
		if($skits_loop->have_posts()) :

<<<<<<< HEAD
<?php wp_reset_query(); ?>
=======
			while($skits_loop->have_posts()) : $skits_loop->the_post(); ?>

				<?php $channel_type = get_post_meta(get_the_id(), 'wpcf-channel', true) ?>

				<?php if ( $channel_type == $channel[$i-1]->post_title ) { ?>
					<h3 style='color: red;'> <?php the_title(); ?> </h3>
				<?php } ?>

			<?php endwhile; ?>

		<?php endif; ?>
>>>>>>> Fixing missing repo?

	<?php endfor; ?>
		
</div><!-- end channel_container -->

<?php get_sidebar(); ?>
<?php get_footer(); 
