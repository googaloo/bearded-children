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
<!-- <link type='text/css' rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/normalize.css' /> -->
<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); ?>
</head>
<body>
    
    <div class='social-box'>
        
        <a href='#' class='social-link social-yt'>Youtube</a>
        <a href='#' class='social-link social-fb'>Facebook</a>
        <a href='#' class='social-link social-tw'>Twitter</a>
        <a href='#' class='social-link social-rd'>Reddit</a>
        <a href='#' class='social-link social-em'>Email</a>
        
    </div>
	
	
    <div class='main-container'>
        
	<div class='adbox adbox1'>
		
		<div class='temp-ad-box' style='width: 150px; height: 225px; background: #CCC; float: right;'></div>
		
	</div>
	    
	    <div class='content-container'>
	    
		<div class='masthead'>

		    <div class='logo-box'><a href='<?php site_url(); ?>'>Bearded Children</a></div>
		    <nav class='main-nav'>
		  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		    </nav>
		    <div class='search-bar-box'>

			   <?php include('searchform.php'); ?>

		    </div><!-- end search-bar-box -->

		</div><!-- end masthead -->