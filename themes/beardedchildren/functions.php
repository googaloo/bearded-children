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

// Whats New Tab
class bc_whats_new extends WP_Widget {

    function __construct() {

        parent::__construct('bc_whats_new', 'Whats New');

    }

    function widget($args, $instance) {

        extract($args);

        $title = $instance['title'];

        echo $title;

    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['title'] = $new_instance['title'];

        return $instance;

    }

    function form($instance) {

        $title = $instance['title'];

        ?>

        <label for="<?php echo $this->get_field_id('title'); ?>">Widget Title</label>
        <p><input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"name="<?php echo $this->get_field_name('title'); ?>" /></p>

        <?php 

    }

}

// Load widgets
add_action("widgets_init", "bc_load_widgets");  
function bc_load_widgets() {

    register_widget('bc_whats_new');

}

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