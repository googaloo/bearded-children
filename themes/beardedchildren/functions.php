<?php

//////////////////////////////////////////////////////////////////
// ENQUE SCRIPTS AND STYLES //
////////////////////////////////////////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('scrollto', get_template_directory_uri().'/js/jquery.scrollTo-1.4.3.1-min.js');
    wp_enqueue_script('jquery-ui', 'http://code.jquery.com/ui/1.10.2/jquery-ui.js');
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

register_sidebar ( array(

    'name' => 'What\'s New',
    'id' => 'whats_new',
    'description' => 'Sidebar for the What\'s new widget'

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

add_shortcode( 'whats_new', 'whats_new_shortcode' );

function whats_new_shortcode() {

    ob_start();
    dynamic_sidebar('whats_new');
    $html = ob_get_contents();
    ob_end_clean();
    return $html;

}