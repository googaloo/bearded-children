<?php

// Generic  default for single post page for articles 

?>

<?php
	get_header();
?>

<div class="single-container">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) :  the_post(); ?>

			<div <?php post_class(); ?>>

				<h2 class="single-header"><?php the_title(); ?></h2>
				<div class="date-and-author-box">Date: <span class="head-date"><?php the_date('Y-m-d'); ?></span>Author: <a href="<?php the_author_link(); ?>"><span class="head-author"><?php the_author(); ?></span></a></div>
				<div class="whats-new-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
				<div class="single-content-container"><?php the_content(); ?></div><!-- end .single-content-container -->

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

			<div class="comment-form">

				<?php comments_template(); ?>

			</div><!-- end .comments-container -->

</div><!-- end .single-container -->

<div class='primary-sidebar-container'>

	<?php dynamic_sidebar('primary'); ?>
			
</div><!-- end .primary-sidebar-container -->

<?php
	get_sidebar();
	get_footer();
?>