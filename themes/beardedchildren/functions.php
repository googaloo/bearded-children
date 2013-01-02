<?php

//////////////////////////////////////////////////////////////////
// WIDGETS //
////////////////////////////////////////////////////////////////

register_sidebar();

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

// end collect_email /////////////////////////////////////////////////////////////

// BC Slider Custom Post Type ////////////////////////////////////////////////////

add_action ( 'init', 'bc_slider_registration' );

function bc_slider_registration() {
	
	register_post_type('bc-slider',
			
		array(
				
			'labels' => array (
				'name' => __( 'BC Slider' ),
				'singular_name' => __( 'Slide' ),
				'add_new_item' => __( 'Add Slide' ),
				'new_item' => __( 'cheese' )
			),
			
			'public' => true,
			'has_archive' => true,
			'description' => __( 'This is the official Bearded Children Slider for the front page yall' ),
			'menu_position' => 100,
			'supports' => array ( 'title', 'editor')
			
		)
			
	);
			
}

// Custom write panels for BC Slider //////////////////////////////////
// using WP	Alchemy http://www.farinspace.com/wpalchemy-metabox/#download ////////////////

include_once 'metaboxes/setup.php';
include_once 'metaboxes/bc-slider-spec.php';
