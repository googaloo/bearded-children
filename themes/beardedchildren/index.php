<?php

/*
 * 
 * Description: Template for Bearded Children
 * 
 */

?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<h2 class='beard-post-header'>As it Grows</h2>

	<?php /* Start the Loop */ ?>
		   <?php while ( have_posts() ) : the_post(); ?>

		<div <?php post_class(); ?>>

			<?php the_title(); ?><br/>
			<?php the_content(); ?>

		</div><!-- end -->

		   <?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>
THIS IS INDEX
<?php get_sidebar(); ?>
<?php get_footer(); 