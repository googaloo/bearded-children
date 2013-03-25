<?php

/* Template Name: BC Video Archive */

?>

<?php get_header(); ?>

<h1>Channels</h1>

<div class='channel_container'>
	
	<?php
	$num_channels = wp_count_posts('bc-channel')->publish;
	$args = array('post_type' => 'bc-channel', 'orderby' => 'menu_order', 'order' => 'ASC');
	$channel = get_posts($args); 

	for($i=0; $i<=$num_channels-1; $i++) :
		$images = get_children( array( 'post_parent' => $channel[$i]->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
		if ( $images ) :
			$image = array_shift( $images );
			$channel_bg = wp_get_attachment_url( $image->ID );
		endif; ?>

		<h2><?php echo $channel[$i]->post_title; ?></h2>
		<div class='channel-box'>
			<div class='channel-logo'><?php echo get_the_post_thumbnail($channel[$i]->ID, 'large'); ?></div>
			<div class='channel-img' style='background: url(<?php echo $channel_bg; ?>);'>This is where the cheese is made.</div><!-- end .channel-img <?php echo $i; ?> -->
		
		<?php
		$videos_loop = new WP_Query(array('post_type'=>'bc-videos'));
		if($videos_loop->have_posts()) :

			while($videos_loop->have_posts()) : $videos_loop->the_post(); ?>

				<?php $video_channel = get_post_meta(get_the_id(), 'wpcf-channel', true); ?>
				<!-- <p><?php echo get_post_meta(get_the_id(), 'wpcf-channel', true); ?></p> -->
				<?php $video_descr = get_post_meta(get_the_id(), 'wpcf-description', true); ?>
				<div class='videos-box'>
					<?php if ( $video_channel == $channel[$i-1]->post_title ) { ?>
						<?php the_post_thumbnail('medium'); ?>
						<h3 class='video-title'> <?php the_title(); ?> </h3> 
						<p class='vid-descr'><?php echo $video_descr; ?></p>
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
