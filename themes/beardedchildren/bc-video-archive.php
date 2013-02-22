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
		
		<?php $videoThumb = str_replace('http://www.youtube.com/watch?v=','http://img.youtube.com/vi/',$videoThumb); ?>
		<?php  $videoThumb .= "/2.jpg"; ?>
		
		<?php $theLink= the_content(); ?>
		<?php $linkExplode = explode("=", $theLink); ?>
		<?php echo "<script type='text/javascript'>alert('".$linkExplode[0]."');</script>" ?>
		<?php echo $linkExplode[1]; ?>
		<?php the_content(); ?>

	<?php endwhile;

endif; ?>

<div class="navigation">

    <div class="alignleft"><?php next_posts_link('Previous entries') ?></div>

    <div class="alignright"><?php previous_posts_link('Next entries') ?></div>

</div>

<?php wp_reset_query(); ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
