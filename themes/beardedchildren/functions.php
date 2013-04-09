<?php

//////////////////////////////////////////////////////////////////
// ENQUE SCRIPTS AND STYLES //
////////////////////////////////////////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('scrollto', get_template_directory_uri().'/js/jquery.scrollTo-1.4.3.1-min.js');
    wp_enqueue_script('jquery-ui', 'http://code.jquery.com/ui/1.10.2/jquery-ui.js');
    wp_enqueue_script('site-scripts', get_template_directory_uri().'/js/scripts.js');
}

//////////////////////////////////////////////////////////////////
// SIDEBARS //
////////////////////////////////////////////////////////////////

register_sidebar ( array( 

    'name' => 'Primary',
    'id' => 'primary',
    'description' => 'The main, plain vanilla sidebar',
    'before_widget' => '<div class="primary-sidebar">',
    'after_widget' => '</div>'

    ));

// TABS
register_sidebar ( array(

    'name' => 'Home New Tabs',
    'id' => 'home_new_tab',
    'description' => 'Sidebar for the Home Page What\'s new widget'

    ));

register_sidebar ( array(

    'name' => 'Videos New Tabs',
    'id' => 'videos_new_tab',
    'description' => 'Sidebar for the Videos What\'s new widget'

    ));

register_sidebar ( array(

    'name' => 'Beard Play New Tabs',
    'id' => 'beard_play_new_tab',
    'description' => 'Sidebar for the Beard Play What\'s new widget'

    ));

//////////////////////////////////////////////////////////////////
// WIDGETS //
////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////
// MENUS //
////////////////////////////////////////////////////////////////

function register_my_menus() {
  register_nav_menus(
    array( 
        'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//////////////////////////////////////////////////////////////////
// COMING SOON - COLLECT EMAILS //
////////////////////////////////////////////////////////////////

// if the email does not already exist, add it to database
function collect_email($email) {

   global $wpdb;
   
    $result = $wpdb->query (
        $wpdb->prepare ( 
            "

            SELECT * FROM viewer_emails
            WHERE emails = '$email'

            "
    ) );

    if ( $result == 0 ) {
        
        $today = date("Y-m-d");
            
        $wpdb->insert( 'viewer_emails', array("emails"=>$email, "creation_date"=>$today) );
        
    }
    
    return $result;
                
}

//////////////////////////////////////////////////////////////////
// SHORT CODES //
////////////////////////////////////////////////////////////////

// The New Tabs
add_shortcode( 'home_new_tab', 'home_new_shortcode' );
add_shortcode( 'videos_new_tab', 'videos_new_shortcode' );
add_shortcode( 'beard_play_new_tab', 'beard_play_new_shortcode' );
add_shortcode( 'short_stories', 'display_short_stories' );

function home_new_shortcode() {

    ob_start();
    dynamic_sidebar('home_new_tab');
    $html = ob_get_contents();
    ob_end_clean();
    return $html;

}

function videos_new_shortcode() {

    ob_start();
    dynamic_sidebar('videos_new_tab');
    $html = ob_get_contents();
    ob_end_clean();
    return $html;

}

function beard_play_new_shortcode() {

    ob_start();
    dynamic_sidebar('beard_play_new_tab');
    $html = ob_get_contents();
    ob_end_clean();
    return $html;

}

function display_short_stories() {

    $stories_loop = new WP_Query ( array('post_type' => 'post', 'category_name' => 'short-stories') );
    if ( $stories_loop->have_posts() ) : 
        while ( $stories_loop->have_posts() ) : $stories_loop->the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>

    <?php
        endwhile;
    endif;

    wp_reset_query();

}