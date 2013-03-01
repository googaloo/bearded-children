<?php

// Generic  default for single post page for articles 

?>

<?php
	get_header();
?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) :  the_post(); ?>

		<div <?php post_class(); ?>>

			<?php the_title(); ?>
			<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php
	get_sidebar();
	get_footer();
?>