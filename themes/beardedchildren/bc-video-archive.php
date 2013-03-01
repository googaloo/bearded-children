<?php

/* Template Name: BC Video Archive */

?>

<?php get_header(); ?>

<?php

$args = array( 'post_type' => 'bc-videos', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );

if ( $loop->have_posts() ) : 
	
	while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<?php $theLink= get_the_content(); ?>
		<?php $linkExplode = explode("=", $theLink); ?>
		<a href="<?php the_permalink(); ?>"><img src="http://img.youtube.com/vi/<?php echo $linkExplode[1]; ?>/mqdefault.jpg" /></a>

		<?php 
		
		$meta_channel = get_post_meta(get_the_id(), 'wpcf-channel', true); 
		$meta_descr = get_post_meta(get_the_id(), 'wpcf-description', true); 
		
		?>
		
		<p>Channel: <?php echo $meta_channel; ?></p>
		<p>Description: <?php echo $meta_descr; ?></p>
		
	<?php endwhile;

endif; ?>

<div class="navigation">

    <div class="alignleft"><?php next_posts_link('Previous entries') ?></div>

    <div class="alignright"><?php previous_posts_link('Next entries') ?></div>

</div>

<?php wp_reset_query(); ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
