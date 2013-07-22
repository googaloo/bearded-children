<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title></title>
<link type='text/css' rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/style.css' />
<link type='text/css' rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/normalize.css' />
<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); ?>
</head>
<body>
    
	
    <div class='main-container'>
        
		<div class='adbox adbox1'>
			
			<div class='temp-ad-box'></div>
			
		</div>
		    
		<div class='content-container clearfix'>

			<div class='social-box'>
        
				<ul class='social-list'>
				    <li class='social-item youtube'><a href='http://www.youtube.com/beardedchildrendotcm' class='social-link social-yt'><div>Youtube</div></li>
				    <li class='social-item facebook'><a href='http://www.facebook.com/beardedchildren' class='social-link social-fb'><div>Facebook</div></a></li>
				    <li class='social-item twitter'><a href='http://www.twitter.com/beardchildren' class='social-link social-tw'><div>Twitter</div></a></li>
				    <li class='social-item social-rss'><a href='<?php bloginfo('rss2_url'); ?>' class='social-link social-em'><div>RSS</div></a></li>
				</ul>
			        
			</div><!-- end .social-box -->
		    
			<div class='masthead'>

			    <div class='logo-box'><a href='<?php echo esc_attr( home_url() ); ?>'>Bearded Children</a></div>

			    <div class='search-bar-box'>

				   <?php include('searchform.php'); ?>

			    </div><!-- end search-bar-box -->

			</div><!-- end masthead -->

			<?php if ( !is_front_page() ): ?>
				    <nav class='main-nav'>
				  		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				    </nav>
				<?php endif; ?>