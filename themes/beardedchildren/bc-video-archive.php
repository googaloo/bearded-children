<?php

/* Template Name: BC Video Archive */
/* !!! NOT USED ANYMORE DUE TO THE BC TABS WIDGET !!! */

?>

<?php get_header(); ?>

<h1>Channels</h1>

<div class='channel_container'>
	
	<?php
	$num_channels = wp_count_posts('bc-channel')->publish; // Cound number of channels to know how many to cycle through
	$args = array('post_type' => 'bc-channel', 'orderby' => 'menu_order', 'order' => 'ASC'); // arguments for the channel posts
	$channel = get_posts($args); // get the channel posts

	// Go through each channel to get the featured image and the first image (description background)
	for($i=0; $i<=$num_channels-1; $i++) :
		$images = get_children( array( 'post_parent' => $channel[$i]->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
		if ( $images ) :
			$image = array_shift( $images );
			$channel_bg = wp_get_attachment_url( $image->ID );
		endif; ?>

		<?php // get the channel description // ?>
		<?php $channel_descr = get_post_meta ( $channel[$i]->ID, 'wpcf-channel-description', true); ?>

		<h2><?php echo $channel[$i]->post_title; ?></h2> <?php // get the title // ?>
		<div class='channel-box'>
			<div class='channel-logo'><?php echo get_the_post_thumbnail($channel[$i]->ID, 'large'); ?></div>
			<div class='channel-img' style='background: url(<?php echo $channel_bg; ?>);'><?php echo $channel_descr; ?></div><!-- end .channel-img <?php echo $i; ?> -->
		
		<?php
		// Start the Videos loop // Through each channel "For" statement, this loop is called and queried if the Channel name == The post meta channel name (this is how it connects)
		$videos_loop = new WP_Query(array('post_type'=>'bc-videos'));
		if($videos_loop->have_posts()) :

			while($videos_loop->have_posts()) : $videos_loop->the_post(); ?>

				<?php $video_channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?> <?php // the channel // ?>
				<?php $video_descr = get_post_meta(get_the_id(), 'wpcf-video-description', true); ?>
				<div class='videos-box'>
					<?php if ( $video_channel == $channel[$i]->post_title ) { ?> <?php // Check the Video channel and the channel // ?>
						<?php get_the_post_thumbnail ( get_the_id(), 'thumbnail' ); ?> <?php // get the videos thumbnail // ?>
						<h3 class='video-title'> <?php the_title(); ?> </h3> <?php // video title // ?>
						<p class='vid-descr'><?php echo $video_descr; ?></p> <?php // video description // ?>
					<?php } ?> 
				</div><!-- end .videos-box -->
			<?php endwhile; ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>

		</div><!-- end .channel-box -->

	<?php endfor; ?>
		
</div><!-- end channel_container -->

<?php get_sidebar(); ?>
<?php get_footer(); 
