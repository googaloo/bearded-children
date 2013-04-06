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



			<h2 class='beard-post-header'>As it Grows</h2>

		<?php /* Start the Loop */ ?>
		<?php $loop = wp_get_recent_posts(); ?>

		    <?php foreach ( $loop as $post ) : ?>

		    	<?php echo $post['post_title']; ?>

		    <?php endforeach; ?>

	</div><!-- end .beard-posts -->
	
	<div class='adbox adbox2'></div>

<?php dynamic_sidebar('home_new_tab'); ?>

</div><!-- end .generic-content-container -->

<?php get_sidebar(); ?>
<?php get_footer(); 