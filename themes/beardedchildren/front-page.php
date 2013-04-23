<?php

/*
 * 
 * Description: What up, this is the BC TEMPALTE Y'AAALLLLL!!!
 * 
 */

?>

<?php get_header(); ?>

<div class='home-content-slider'>

	<?php get_sidebar('bc-slider'); ?>
    
</div>

 <script type='text/javascript'>

        	jQuery(document).ready(function($) {

        		// Tabs
        		$('.home-tabs-container').tabs();

        	});

        </script>

        <div class='home-tabs-container'>

	        <ul class='home-tabs-nav'>

	        	<li class='home-tabs active-home-tab'><a href="#tabs-1" title="As the Beard Grows"><div class='home-blog-tab tab-container'>AS THE BEARD GROWS</div></a></li>
	        	<li class='home-tabs inactive-home-tab'><a href="#tabs-2" title="Videos"><div class='home-videos-tab tab-container'>VIDEOS</div></a></li>
	        	<li class='home-tabs inactive-home-tab'><a href="#tabs-3" title="Beard Play"><div class='home-beard-play-tab tab-container'>BEARD PLAY</div></a></li>
	        	<li class='home-tabs inactive-home-tab'><a href="#tabs-4" title="Short Stories"><div class='home-writing-tab tab-container'>SHORT STORIES</div></a></li>

	        </ul>

	        <div id="tabs-1" class='tabs'>

	        	<h2 class="tabs-header">As the Beard Grows</h2>
	        	<div class="more-container">
	        		<p class="header-description">The bearded Blog</p>
	        		<a href='index.php?page_id=27'><div class='more-box-top'>MORE</div></a>
	        	</div>

	        	<?php

	        	$home_growth_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'as-the-beard-grows', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $home_growth_loop->have_posts() ) : 

	        		while ( $home_growth_loop->have_posts() ) : $home_growth_loop->the_post();

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="home-tab-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
	        				<div class="post-social-box">

	        					<ul class="post-social-box-list">

	        						<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/facebook.png) no-repeat;'></div></a></li>
	        						<li><a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/twitter.png) no-repeat;'></div></a></li>
	        						<li><a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/googleplus.png) no-repeat; margin-left: 10px;'></div></a></li>
	        						<li><a href="http://www.reddit.com/submit?url=<?php echo the_permalink(); ?>" target="_blank"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/reddit.png) no-repeat;'></div></a></li>

	        					</ul>

	        				</div><!-- end .post-social-box -->
	        				<div class="home-tab-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p class="post-excerpt"><?php the_excerpt(); ?></p>

	        			</div><!-- end .tabs-single-container -->

				<?php

	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box-bottom'><a href='index.php?page_id=27'>MORE</a></div>

	        </div><!-- end #tabs-1 AS THE BEARD GROWS -->

	        <div id="tabs-2" class='tabs'>

	        	<h2 class="tabs-header">Videos</h2>
	        	<div class="more-container">
	        		<p class="header-description">You should like... watch these... or don't, whatever...</p>
	        		<a href='index.php?page_id=151'><div class='more-box-top'>MORE</div></a>
	        	</div>

	        	<?php

	        	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $videos_loop->have_posts() ) : 

	        		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

	        		$bc_channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true);

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
	        				<a href="<?php bloginfo('url'); ?>/<?php echo $bc_channel; ?>" class="channel-link"><span class="whats-new-channel"><?php echo $bc_channel; ?></span></a>
	        				<div class="post-social-box">

	        					<ul class="post-social-box-list">

	        						<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/facebook.png) no-repeat;'></div></a></li>
	        						<li><a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/twitter.png) no-repeat;'></div></a></li>
	        						<li><a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/googleplus.png) no-repeat; margin-left: 10px;'></div></a></li>
	        						<li><a href="http://www.reddit.com/submit?url=<?php echo the_permalink(); ?>" target="_blank"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/reddit.png) no-repeat;'></div></a></li>

	        					</ul>

	        				</div><!-- end .post-social-box -->
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>
	        				
	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box-bottom'><a href='index.php?page_id=151'>MORE</a></div>

	        </div><!-- end #tabs-2 VIDEOS -->

	        <div id="tabs-3" class='tabs'>

	        	<h2 class="tabs-header">Beard Play</h2>
	        	<div class="more-container">
	        		<p class="header-description">All things Video Games. AWWWWW YYYEEEAAAA!</p>
	        		<a href='index.php?page_id=153'><div class='more-box-top'>MORE</div></a>
	        	</div>

	        	<?php

	        	$beard_plays_loop = new WP_Query ( array('post_type' => 'bc-beard-plays',  'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $beard_plays_loop->have_posts() ) : 

	        		while ( $beard_plays_loop->have_posts() ) : $beard_plays_loop->the_post();

	        		$play_channel = get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true);

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
	        				<a href="<?php bloginfo('url'); ?>/<?php echo $play_channel; ?>" class="channel-link"><span class="whats-new-channel"><?php echo $play_channel; ?></span></a>
	        				<div class="post-social-box">

	        					<ul class="post-social-box-list">

	        						<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/facebook.png) no-repeat;'></div></a></li>
	        						<li><a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/twitter.png) no-repeat;'></div></a></li>
	        						<li><a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/googleplus.png) no-repeat; margin-left: 10px;'></div></a></li>
	        						<li><a href="http://www.reddit.com/submit?url=<?php echo the_permalink(); ?>" target="_blank"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/reddit.png) no-repeat;'></div></a></li>

	        					</ul>

	        				</div><!-- end .post-social-box -->
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>

	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box-bottom'><a href='index.php?page_id=153'>MORE</a></div>

	        </div><!-- end #tabs-4 BEARD PLAYS -->

	    	<div id="tabs-4" class='tabs'>

	        	<h2 class="tabs-header">Short Stories</h2>
	        	<div class="more-container">
	        		<p class="header-description">Read some stories, usually Sci-Fi</p>
	        		<a href='index.php?page_id=299'><div class='more-box-top'>MORE</div></a>
	        	</div>

	        	<?php

	        	$beard_plays_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'short-stories', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
	        	if ( $beard_plays_loop->have_posts() ) : 

	        		while ( $beard_plays_loop->have_posts() ) : $beard_plays_loop->the_post();

	        	?>
	        			<div class="tabs-single-container">

	        				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	        				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
	        				<div class="post-social-box">

	        					<ul class="post-social-box-list">

	        						<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/facebook.png) no-repeat;'></div></a></li>
	        						<li><a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/twitter.png) no-repeat;'></div></a></li>
	        						<li><a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" rel="popwindow"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/googleplus.png) no-repeat; margin-left: 10px;'></div></a></li>
	        						<li><a href="http://www.reddit.com/submit?url=<?php echo the_permalink(); ?>" target="_blank"><div class="post-social" style='background: url(<?php bloginfo('template_directory'); ?>/images/icons/social/posts/reddit.png) no-repeat;'></div></a></li>

	        					</ul>

	        				</div><!-- end .post-social-box -->
	        				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
	        				<p class="post-excerpt"><?php the_excerpt(); ?></p>


	        			</div><!-- end .tabs-single-container -->

				<?php
	        		endwhile;

	        	endif;

	        	wp_reset_query();

	        	?>

	        	<div class='more-box-bottom'><a href='index.php?page_id=299'>MORE</a></div>

	        </div><!-- end #tabs-4 SHORT STORIES -->

			

	     </div><!--end .home-tabs-container -->


	        <div class='primary-sidebar-container'>

	        	<?php dynamic_sidebar('primary'); ?>
			
			</div><!-- end .primary-sidebar-container -->



<div class="popframe"></div><!-- end .popframe -->

<?php get_footer();