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
        
        <div class='masthead'>
        
            <div class='logo-box'><a href='<?php site_url(); ?>'>Bearded Children</a></div>
            <nav class='main-nav'>
                <?php $li_pages_args = array(
                  
                    'title_li' => '',
                    'exclude' => 6,
                    'sort_column' => 'menu_order'
                    
                );
                
                ?>
                <?php wp_list_pages($li_pages_args); ?>

            </nav>
            <div class='search-bar-box'>
                
                <?php include('searchform.php'); ?>
                
            </div><!-- end search-bar-box -->
            
        </div><!-- end masthead -->