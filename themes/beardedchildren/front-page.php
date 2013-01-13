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



<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php the_title(); ?><br/>
        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>