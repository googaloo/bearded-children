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

	for($i=1; $i<=$num_channels; $i++): 

		$images = get_children( array( 'post_parent' => $channel[$i-1]->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
		if ( $images ) :
			$image = array_shift( $images );
			$channel_bg = wp_get_attachment_url( $image->ID );
		endif; ?>

		<h2><?php echo $channel[$i-1]->post_title; ?></h2>
		<div class='channel-box'>
			<div class='channel-logo'><?php echo get_the_post_thumbnail($channel[$i-1]->ID, 'large'); ?></div>
			<div class='channel-img' style='background: url(<?php echo $channel_bg; ?>);'>This is where the cheese is made.</div><!-- end .channel-img <?php echo $i-1; ?> -->
		</div><!-- end .channel-box -->

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
