<?php
    /*
    Plugin Name: BC Slider
    Plugin URI: http://www.beardedchildren.com
    Description: Custom plugin for Bearded Children
    Version: 1.0
    Author: Rusty Odom
    Author URI: http://www.RustinLOdom.com
    */
?>
<?php

add_action('admin_menu', 'admin_menu_tester');

function admin_menu_tester() {
    add_options_page('BC Slider Options', 'BC Slider Options', 1, 'BC_Slider_Options', 'bc_slider_admin');
}

function bc_slider_admin() {
    include('bc_slider_import_admin.php');    
}

// function to call in the theme
function create_bc_slider() {
    
    // now just need to add an option to store number of slides use
    // then grab all that content here
    // throw it in some html
    // and return the html variable! BLAMO!
    // Maybe change the url of the images too...
    // Also create a dropdown list of sidebar images already uploaded (url and name/title via database)
    // Also create a way to delete slide
    // Also make sure that if those values exist in the database, they are populated when returning to options settings for plugin
    
}
?>