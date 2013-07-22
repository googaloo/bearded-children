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

//////////////////////////////////////////////////////////////////
// MISC //
////////////////////////////////////////////////////////////////

// Remove width and height attributes from images
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); function remove_thumbnail_dimensions( $html ) { $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html; }

// Add Custom Post Types to RSS
function custom_feed_request( $vars ) {
 if (isset($vars['feed']) && !isset($vars['post_type']))
  $vars['post_type'] = array( 'post' ); // Add Custom Post Types here
 return $vars;
}
add_filter( 'request', 'custom_feed_request' );
