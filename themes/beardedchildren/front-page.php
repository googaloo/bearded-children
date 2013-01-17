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
<div class='front-page-nav'>
	<div class='front-page-videos-btn'></div>
	<div class='front-page-games-btn'></div>
	<div class='front-page-more-btn'></div>
	<div class='front-page-videos-box'></div>
	<div class='front-page-games-box'></div>
	<div class='front-page-more-box'></div>
</div>'

<div class='generic-content-container'>

	<div class='beard-posts'>

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

	</div><!-- end .beard-posts -->
	
	<div class='adbox adbox2'></div>

</div><!-- end .generic-content-container -->

<?php get_sidebar(); ?>
<?php get_footer(); 