<?php

/*
 * 
 *  Template Name: Beard Play
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

    	<li class='whats-new-tab'><a href="#tabs-1">GAME TALK</a></li>
    	<li class='whats-new-tab'><a href="#tabs-2">GAMES</a></li>
    	<li class='whats-new-tab'><a href="#tabs-3">BEARD PLAY</a></li>

    </ul>

    <div id="tabs-1">

    	<?php
    	$argsss=array('tag'=>'games-2', 'post_type'=>'post', 'category_name'=>'as-the-beard-grows', 'posts_per_page'=>4, 'orderby'=>'date', 'order'=>'DESC' );
    	$growth_loop = new WP_Query ( $argsss );
    	
    	if ( $growth_loop->have_posts() ) : 

    		while ( $growth_loop->have_posts() ) : $growth_loop->the_post();

    	?>
    			<div class="tabs-single-container">

    				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
    				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
    				<p><?php echo get_post_meta(get_the_id(), 'wpcf-video-description', true); ?></p>

    			</div><!-- end .tabs-single-container -->

		<?php

    		endwhile;

    	endif;

    	wp_reset_query();

    	?>

    </div><!-- end #tabs-1 GAME TALK -->

    <div id="tabs-2">

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/games">MORE Games</a></div>

    	<?php

    	$videos_loop = new WP_Query ( array('post_type' => 'bc-games', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
    	if ( $videos_loop->have_posts() ) : 

    		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

    	?>
    			<div class="tabs-single-container">

    				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
    				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>	        				
    				<p><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-description', true); ?></p>
    				<span class="whats-new-channel"><?php echo get_post_meta(get_the_id(), 'wpcf-lets-play-channel', true); ?></span>

    			</div><!-- end .tabs-single-container -->

		<?php
    		endwhile;

    	endif;

    	wp_reset_query();

    	?>

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/games">MORE Games</a></div>

    </div><!-- end #tabs-2 GAMES-->

    <div id="tabs-3">

    	<div class='more-box'><a href="<?php bloginfo('url'); ?>/beard-play-lets-play">MORE Lets Plays</a></div>

    	<?php

    	$videos_loop = new WP_Query ( array('post_type' => 'bc-beard-plays', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC') );
    	if ( $videos_loop->have_posts() ) : 

    		while ( $videos_loop->have_posts() ) : $videos_loop->the_post();

    	?>
    			<div class="tabs-single-container">

    				<h3 class="whats-new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    				<div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
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

<div class='primary-sidebar-container'>

    <?php dynamic_sidebar('primary'); ?>
        
</div><!-- end .primary-sidebar-container -->

<?php
    get_sidebar();
    get_footer();