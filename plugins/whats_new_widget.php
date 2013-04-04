<?php 
	/*
	Plugin Name: BC Whats New Widget
	Plugin URI: http://www.beardedchildren.com
	Description: Plugin for displaying what is new in terms of videos, games, etc.
	Author: Rustin L Odom
	Version: 1.0
	Author URI: http://www.beardedchildren.com
	*/
?>
<?php 

class whats_new_widget extends WP_Widget {

    public function __construct() {

        parent::__construct('whats_new_widget', 'Whats New Widget', array('description' => 'Whats New Tabs widget'));

    }

    public function widget($args, $instance) {

        extract($args);

        ?>

        <script type='text/javascript'>

        	jQuery(document).ready(function() {

        		jQuery('#tabs').tabs();

        	});

        </script>

        <div class='whats-new-container' id='tabs'>

	        <ul class='whats-new-nav'>

	        	<li class='whats-new-tab'><a href="#tabs-1">VIDEOS</a></li>
	        	<li class='whats-new-tab'><a href="#tabs-2">BEARD PLAY</a></li>
	        	<li class='whats-new-tab'><a href="#tabs-3">GAMES</a></li>
	        	<li class='whats-new-tab'><a href="#tabs-4">COMICS</a></li>

	        </ul>

	        <div id="tabs-1">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>
	        			<div class="whats-new-single-container">

	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?></span>

	        			</div><!-- end .whats-new-single-container -->

				<?php

	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-1 VIDEO -->

	        <div id="tabs-2">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-lets-play', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>
	        			<div class="whats-new-single-container">

	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .whats-new-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-2 BEARD PLAY -->

	        <div id="tabs-3">

	        	<h3 class='whats-new-coming-soon'>Coming Soon... Well maybe...</h3>

	        </div><!-- end #tabs-3 GAMES -->

	        <div id="tabs-4">

	        	<h3 class='whats-new-coming-soon'>Coming Soon... Well maybe...</h3>

	        </div><!-- end #tabs-4 COMICS -->

	     </div><!--end .whats-new-container -->

        <?php

    }

}

// Load widgets
add_action("widgets_init", "bc_load_widgets");  
function bc_load_widgets() {

    register_widget('whats_new_widget');

}