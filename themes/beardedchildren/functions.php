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

// Whats New Tab
class bc_whats_new extends WP_Widget {

    function bc_whats_new() {

        $widget_ops = array (

            'classname' => 'Whats New Tabs',
            'description' => 'Latest BC Content'

            );

        $control_ops = array(

            'width' => 600,
            'id_base' => 'bc_whats_new'

            );

        $this->WP_Widget('bc_whats_new', 'Whats New Tabs', $widget_ops, $control_ops);

    }

    function widget( $args, $instance ) {

        extract ( $args );

        $sort = $instance['sort'];


    }

}

// Add widgets
add_action("widgets_init", "bc_load_widgets");  
function bc_load_widgets() {

    register_widget('bc_whats_new');

}

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