<?php

/*
 * 
 *  Template Name: Beard Plays
 * 
 */
?>

<?php
	get_header();
?>

<?php

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

    $wp_query->query('post_type=bc-beard-plays&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged.'&category_name=Beard Plays');
?>
    <div class='page-single-container'>
<?php
    if ( $wp_query->have_posts() ) : 
        while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="date-and-author-box">Date: <span class="head-date"><?php the_time('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
        <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>

    <?php
        endwhile; ?>

    </div><!-- end .page-single-container -->

<div class="nav-previous"><?php next_posts_link('<span class="meta-nav">&laquo;</span> Older posts') ?></div>
<div class="nav-previous"><?php previous_posts_link('<span class="meta-nav">&laquo;</span> Newer posts') ?></div>
<?php
    endif;

    wp_reset_query(); ?>

    	<div class='primary-sidebar-container'>

		<?php dynamic_sidebar('primary'); ?>
			
	</div><!-- end .primary-sidebar-container -->

<?php
	get_sidebar();
	get_footer();
