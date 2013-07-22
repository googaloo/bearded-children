<?php

/*
 * 
 *  Template Name: Videos
 * 
 */
?>

<?php
    get_header();
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

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/skits">MORE Skits</a></div>

    	<?php

    	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC', 'meta_key' => 'wpcf-videos-channel', 'meta_value' => 'Skits') );

    	if ( $videos_loop->have_posts() ) : 

    		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

    	?>
    	<?php $channel = get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?>

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
    				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>
    				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-videos-channel', true); ?></span>

    			</div><!-- end .tabs-single-container -->

		<?php

    		endwhile;

    	endif;

    	wp_reset_query();

    	?>

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/skits">MORE Skits</a></div>

    </div><!-- end #tabs-1 Skits -->

    <div id="tabs-2">

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/bits-of-8">MORE Bits of 8</a></div>

    	<?php

    	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC', 'meta_key' => 'wpcf-videos-channel', 'meta_value' => 'Bits of 8') );
    	if ( $videos_loop->have_posts() ) : 

    		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

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
    				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
    				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

    			</div><!-- end .tabs-single-container -->


		<?php
    		endwhile;

    	endif;

    	wp_reset_query();

    	?>

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/bits-of-8">MORE Bits of 8</a></div>

    </div><!-- end #tabs-2 Bits of 8 -->

    <div id="tabs-3">

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/recasts">MORE Recasts</a></div>

    	<?php

    	$videos_loop = new WP_Query ( array('post_type' => 'bc-videos', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC', 'meta_key' => 'wpcf-videos-channel', 'meta_value' => 'Recasts') );
    	if ( $videos_loop->have_posts() ) : 

    		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

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
				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

			</div><!-- end .tabs-single-container -->

		<?php
    		endwhile;

    	endif;

    	wp_reset_query();

    	?>

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/recasts">MORE Recasts</a></div>

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

<div class='primary-sidebar-container'>

    <?php dynamic_sidebar('primary'); ?>
        
</div><!-- end .primary-sidebar-container -->

<?php
    get_sidebar();
    get_footer();