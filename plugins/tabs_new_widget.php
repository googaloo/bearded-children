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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Home Widget - Displays all New in As the Beard Grows, Videos, Beard Play, etc ///////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class home_new_widget extends WP_Widget {

    public function __construct() {

        parent::__construct('home_new_widget', 'Home New Widget', array('description' => 'Whats New Tabs widget for Home Page'));

    }

    public function widget($args, $instance) {

        extract($args);

        ?>

        <script type='text/javascript'>

        	jQuery(document).ready(function($) {

        		// Tabs
        		$('.home-tabs-container').tabs();

        	});

        </script>

        <div class='home-tabs-container'>

	        <ul class='home-tabs-nav'>

	        	<li class='home-tabs active-home-tab'><a href="#tabs-1" title="As the Beard Grows" rel="tooltip"><div class='home-blog-tab tab-container'>AS THE BEARD GROWS</div></a></li>
	        	<li class='home-tabs inactive-home-tab'><a href="#tabs-2" title="Videos" rel="tooltip"><div class='home-videos-tab tab-container'>VIDEOS</div></a></li>
	        	<li class='home-tabs inactive-home-tab'><a href="#tabs-3" title="Beard Play" rel="tooltip"><div class='home-beard-play-tab tab-container'>BEARD PLAY</div></a></li>
	        	<li class='home-tabs inactive-home-tab'><a href="#tabs-4" title="Short Stories" rel="tooltip"><div class='home-writing-tab tab-container'>SHORT STORIES</div></a></li>

	        </ul>

	        <div id="tabs-1" class='tabs'>

	        	<div class='more-box'><a href='index.php?page_id=27'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        	<?php

	        	$home_growth_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'as-the-beard-grows', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $home_growth_loop->have_posts() ) : 

	        		while ( $home_growth_loop->have_posts() ) : $home_growth_loop->the_post();

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="home-tab-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="home-tab-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<?php the_excerpt(); ?>

	        			</div><!-- end .tabs-single-container -->

				<?php

	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box'><a href='index.php?page_id=27'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        </div><!-- end #tabs-1 AS THE BEARD GROWS -->

	        <div id="tabs-2" class='tabs'>

	        	<div class='more-box'><a href='index.php?page_id=151'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box'><a href='index.php?page_id=151'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        </div><!-- end #tabs-2 VIDEOS -->

	        <div id="tabs-3" class='tabs'>

	        	<div class='more-box'><a href='index.php?page_id=153'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        	<?php

	        	$beard_plays_loop = new WP_Query ( array('post_type' => 'bc-beard-plays', 'category_name' => 'beard-plays', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $beard_plays_loop->have_posts() ) : 

	        		while ( $beard_plays_loop->have_posts() ) : $beard_plays_loop->the_post();

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box'><a href='index.php?page_id=153'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        </div><!-- end #tabs-4 BEARD PLAYS -->

	    	<div id="tabs-4" class='tabs'>

	    		<div class='more-box'><a href='index.php?page_id=299'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        	<?php

	        	$beard_plays_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'short-stories', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $beard_plays_loop->have_posts() ) : 

	        		while ( $beard_plays_loop->have_posts() ) : $beard_plays_loop->the_post();

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box'><a href='index.php?page_id=299'>MORE <img src="<?php bloginfo('template_directory'); ?>/images/buttons/more-btn.jpg" alt="More button" /></a></div>

	        </div><!-- end #tabs-4 SHORT STORIES -->

			

	     </div><!--end .home-tabs-container -->


	        <div class='primary-sidebar-container'>

	        	<?php dynamic_sidebar('primary'); ?>
			
			</div><!-- end .primary-sidebar-container -->

        <?php

    }

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Videos New Widget - Displays all New in Videos ////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

	        	<?php endif; ?>

				<?php

	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-1 Skits -->

	        <div id="tabs-2">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC', 'meta_key' => 'wpcf-videos-channel', 'meta_value' => 'Bits of 8') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>

	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->


				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-2 Bits of 8 -->

	        <div id="tabs-3">

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC', 'meta_key' => 'wpcf-videos-channel', 'meta_value' => 'Recasts') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>

        			<div class="tabs-single-container">

        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-3 RECASTS -->

	        <div id="tabs-4">


	        	<?php

	        	$executed = false;

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC', 'meta_key' => 'wpcf-videos-channel', 'meta_value' => 'Scifi') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        	?>

        			<div class="tabs-single-container">

        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

        			</div><!-- end .tabs-single-container -->

	        		

				<?php
	        		endwhile;

	        	endif; ?>

	        	<h3 class='whats-new-coming-soon'>Coming Soon... Well maybe...</h3>

	        	<?php

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-4 Scifi -->

	    </div><!-- end .whats-new-container #tabs -->

        <?php

    }

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Beard Play Widget - Displays all New in Beard Play ////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

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
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>	        				
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

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
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
	        				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        </div><!-- end #tabs-3 -->

	    </div><!-- end .whats-new-container #tabs -->

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