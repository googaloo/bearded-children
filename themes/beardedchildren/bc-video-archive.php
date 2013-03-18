<?php

/* Template Name: BC Video Archive */

?>

<?php get_header(); ?>

<h1>Channels</h1>

<div class='channel_container'>
	
	<?php
	$num_channels=wp_count_posts('bc-channel')->publish;
	$args = array('post_type' => 'bc-channel', 'orderby' => 'menu_order', 'order' => 'ASC');
	$channel = get_posts($args);

	for($i=1; $i<=$num_channels; $i++): ?>

		<h2><?php echo $channel[$i-1]->post_title; ?></h2>
		<div><?php echo get_the_post_thumbnail($channel[$i-1]->ID, 'thumbnail'); ?></div>
		<div><?php echo $channel[$i-1]->post_content; ?></div>

		<?php
		$skits_loop = new WP_Query(array('post_type'=>'bc-videos'));
		if($skits_loop->have_posts()) :

			while($skits_loop->have_posts()) : $skits_loop->the_post(); ?>

				<?php $channel_type = get_post_meta(get_the_id(), 'wpcf-channel', true) ?>

				<?php if ( $channel_type == $channel[$i-1]->post_title ) { ?>
					<h3 style='color: red;'> <?php the_title(); ?> </h3>
				<?php } ?>

			<?php endwhile; ?>

		<?php endif; ?>

	<?php endfor; ?>
		
</div><!-- end channel_container -->

<?php get_sidebar(); ?>
<?php get_footer(); 
