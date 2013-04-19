<?php

/*
 * 
 *  Template Name: Recasts
 * 
 */
?>

<?php
	get_header();
?>

<?php

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

    $wp_query->query('post_type=bc-videos&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged.'&meta_key=wpcf-videos-channel&meta_value=Recasts');
?>
    <div class='page-single-container'>
<?php
    if ( $wp_query->have_posts() ) : 
        while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
        <div><?php the_excerpt(); ?></div>

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
