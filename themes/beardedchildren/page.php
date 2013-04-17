<?php

// Generic Page for Bearded Children
// As the Beard Grows

?>

<?php
	get_header();
?>

	<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
		   <?php while ( have_posts() ) : the_post(); ?>

		<div <?php post_class(); ?>>

			<div class="page-content">

				<?php the_content(); ?>

			</div><!-- end page-content -->

		</div><!-- end -->

		   <?php endwhile; ?>

	<?php endif; ?>
	
	<div class='primary-sidebar-container'>

		<?php dynamic_sidebar('primary'); ?>
			
	</div><!-- end .primary-sidebar-container -->

<?php
	get_sidebar();
	get_footer();
