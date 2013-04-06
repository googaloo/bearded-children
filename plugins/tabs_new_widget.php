<?php 
	/*
	Plugin Name: BC Whats New Widget
	Plugin URI: http://www.beardedchildren.com
	Description: Plugin for displaying what is new in terms of videos, games, etc. Tabs on the Home page, Videos, Games
	Author: Rustin L Odom
	Version: 1.0
	Author URI: http://www.beardedchildren.com
	*/
?>
<?php 

///////////////////////////////////////////////////////////////////////////////////
// Home Widget - Displays all New in As the Beard Grows, Videos, Beard Play, etc //
///////////////////////////////////////////////////////////////////////////////////

class home_new_widget extends WP_Widget {

    public function __construct() {

        parent::__construct('home_new_widget', 'Home New Widget', array('description' => 'Whats New Tabs widget for Home Page'));

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

	        	<li class='whats-new-tab home-tabs'><a href="#tabs-1">AS THE BEARD GROWS</a></li>
	        	<li class='whats-new-tab home-tabs'><a href="#tabs-2">VIDEOS</a></li>
	        	<li class='whats-new-tab home-tabs'><a href="#tabs-3">GAMES</a></li>
	        	<li class='whats-new-tab home-tabs'><a href="#tabs-4">BEARD PLAY</a></li>
	        	<li class='whats-new-tab home-tabs'><a href="#tabs-5">SHORT STORIES</a></li>

	        </ul>

	        <div id="tabs-1">

	        	<?php

	        	$home_growth_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'as-the-beard-grows', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $home_growth_loop->have_posts() ) : 

	        		while ( $home_growth_loop->have_posts() ) : $home_growth_loop->the_post();

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

	        </div><!-- end #tabs-1 AS THE BEARD GROWS -->

	        <div id="tabs-2">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
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

	        </div><!-- end #tabs-2 VIDEOS -->

	        <div id="tabs-3">

	        	<?php

	        	$games_loop = new WP_Query ( array('post_type' => 'bc-beard-plays', 'category_name' => 'games', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $games_loop->have_posts() ) : 

	        		while ( $games_loop->have_posts() ) : $games_loop->the_post();

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

	        </div><!-- end #tabs-3 GAMES -->

	        <div id="tabs-4">

	        	<?php

	        	$beard_plays_loop = new WP_Query ( array('post_type' => 'bc-beard-plays', 'category_name' => 'beard-plays', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $beard_plays_loop->have_posts() ) : 

	        		while ( $beard_plays_loop->have_posts() ) : $beard_plays_loop->the_post();

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

	        </div><!-- end #tabs-4 BEARD PLAYS -->

	    	<div id="tabs-5">

	        	<h3 class='whats-new-coming-soon'>Short stories coming Soon... Well maybe...</h3>

	        </div><!-- end #tabs-4 COMICS -->

	     </div><!--end .whats-new-container -->

        <?php

    }

}

////////////////////////////////////////////////////
// Videos New Widget - Displays all New in Videos //
////////////////////////////////////////////////////

class videos_new_widget extends WP_Widget {

    public function __construct() {

        parent::__construct('videos_new_widget', 'Videos New Widget', array('description' => 'Whats New Tabs widget for Videos'));

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

	        	<li class='whats-new-tab videos-tabs'><a href="#tabs-1">SKITS</a></li>
	        	<li class='whats-new-tab videos-tabs'><a href="#tabs-2">BITS of 8</a></li>
	        	<li class='whats-new-tab videos-tabs'><a href="#tabs-3">RECASTS</a></li>
	        	<li class='whats-new-tab videos-tabs'><a href="#tabs-4">SCI-FI</a></li>

	        </ul>

	        <div id="tabs-1">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>
	        	<?php $channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?>
	        	<?php if ( $channel == "Skits" ) : ?>
	        			<div class="whats-new-single-container">

	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?></span>

	        			</div><!-- end .whats-new-single-container -->

	        	<?php endif; ?>

				<?php

	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-1 Skits -->

	        <div id="tabs-2">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>

	        	<?php $channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?>
	        	<?php if ( $channel == "Bits of 8" ) : ?>

	        			<div class="whats-new-single-container">

	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .whats-new-single-container -->
	        	<?php endif; ?>

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-2 Bits of 8 -->

	        <div id="tabs-3">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>

	        	<?php $channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?>
	        	<?php if ( $channel == "Recasts" ) : ?>

	        			<div class="whats-new-single-container">

	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .whats-new-single-container -->

	        	<?php endif; ?>

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-3 RECASTS -->

	        <div id="tabs-4">


	        	<?php

	        	$executed = false;

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>

	        	<?php $channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?>
	        	<?php if ( $channel == "Scifi" ) : ?>

	        			<div class="whats-new-single-container">

	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .whats-new-single-container -->

	        	<?php elseif ( $executed != true ) : ?>

	        		<h3 class='whats-new-coming-soon'>Coming Soon... Well maybe...</h3>
	        		<?php $executed = true; ?>

	        	<?php endif; ?>

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-4 Scifi -->

	     </div><!--end .whats-new-container -->

        <?php

    }

}

////////////////////////////////////////////////////////
// Beard Play Widget - Displays all New in Beard Play //
////////////////////////////////////////////////////////

class beard_play_new_widget extends WP_Widget {

    public function __construct() {

        parent::__construct('beard_play_new_widget', 'Beard Play New Widget', array('description' => 'Whats New Tabs widget for Beard Play'));

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

	        	<li class='whats-new-tab'><a href="#tabs-1">GAME TALK</a></li>
	        	<li class='whats-new-tab'><a href="#tabs-2">GAMES</a></li>
	        	<li class='whats-new-tab'><a href="#tabs-3">BEARD PLAY</a></li>

	        </ul>

	        <div id="tabs-1">

	        	<?php

	        	$growth_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'as-the-beard-grows', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	
	        	if ( $growth_loop->have_posts() ) : 

	        		while ( $growth_loop->have_posts() ) : $growth_loop->the_post();

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

	        </div><!-- end #tabs-1 GAME TALK -->

	        <div id="tabs-2">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-games', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
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

	        </div><!-- end #tabs-2 GAMES-->

	        <div id="tabs-3">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-beard-plays', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
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

	        </div><!-- end #tabs-3 BEARD PLAY  -->

	     </div><!--end .whats-new-container -->

        <?php

    }

}

// Load widgets
add_action("widgets_init", "bc_load_widgets");  
function bc_load_widgets() {

    register_widget('home_new_widget');
    register_widget('videos_new_widget');
    register_widget('beard_play_new_widget');

}