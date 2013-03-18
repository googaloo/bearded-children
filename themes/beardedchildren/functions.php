<?php

//////////////////////////////////////////////////////////////////
// ENQUE SCRIPTS AND STYLES //
////////////////////////////////////////////////////////////////

add_action ( 'wp_enqueue_scripts', 'start_scripts' );
function start_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('scrollto', get_template_directory_uri().'/js/jquery.scrollTo-1.4.3.1-min.js');
}

//////////////////////////////////////////////////////////////////
// WIDGETS //
////////////////////////////////////////////////////////////////

function bc_widgets_init() {

}

add_action('widgets_init', 'bc_widgets_init');

//////////////////////////////////////////////////////////////////
// MENUS //
////////////////////////////////////////////////////////////////

function register_my_menus() {
  register_nav_menus(
    array( 'main-menu' => __( 'Main Menu' )
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