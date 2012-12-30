<?php
/*
 * 
 * Bearded Children Slider 
 * 
 */
?>
<?php
    wp_enqueue_script('Latest Jquery From Google', "http://code.jquery.com/jquery-1.8.3.min.js");
    wp_enqueue_script('BC Slider Admin Javascript', get_bloginfo('url').'/wp-content/plugins/bc-slider/bc_slider_js_admin_functions.js');
    wp_enqueue_style('bc-slider-styles', get_bloginfo('url').'/wp-content/plugins/bc-slider/bc-slider-styles.css');
    //echo "<script type='text/javascript' src='".get_bloginfo('url')."/wp-content/plugins/bc-slider/bc_slider_js_admin_functions.js'></script>";
?>
<?php
    if($_POST['hidden'] == "Y") {
        
        //number to use to go tbrough all sides
        $i = 1;
        //number of actual slides
        $num_slides = $_POST['slide-num'];

            // Add options for the url path in which the images will be uploaded if not already created
            update_option('bc-slider-main-image-path', WP_PLUGIN_DIR.'/bc-slider/uploaded_images/main_slider_images/');
            update_option('bc-slider-sidebar-image-path', WP_PLUGIN_DIR.'/bc-slider/uploaded_images/sidebar_images/');

            
            while($i <= $num_slides) {
                
                // update options to show how many slides currently exist
                update_option('bc-slider-num-slides', $num_slides);
                
                // upload images to directory
                if (file_exists(WP_PLUGIN_DIR.'/bc-slider/uploaded_images/main_slider_images/'. $_FILES["slide-$i-main-image"]["name"])) {
                    echo $_FILES["slide-$i-main-image"]["name"] . " already exists. </br>";
                } else {
                    // move the files
                    move_uploaded_file($_FILES["slide-$i-main-image"]["tmp_name"],
                    WP_PLUGIN_DIR.'/bc-slider/uploaded_images/main_slider_images/'. $_FILES["slide-$i-main-image"]["name"]);
                    WP_PLUGIN_DIR.'/bc-slider/uploaded_images/main_slider_images/'. $_FILES["slide-$i-main-image"]["name"];
                    // update options with that slide name
                    update_option("bc-slide-$i-main-image", $_FILES["slide-$i-main-image"]["name"]);
                    update_option("bc-slide-$i-sidebar-image", $_FILES["slide-$i-sidebar-image"]["name"]);
                    // update options rest of input
                    update_option("bc-slide-$i-descr", $_POST["slide-$i-descr"]);
                    update_option("bc-slide-$i-btn-color", $_POST["slide-$i-btn-color"]);
                    update_option("bc-slide-$i-btn-text", $_POST["slide-$i-btn-text"]);
                }
                $i++;
            }

    } else { 

        $output_html = "<div class='bc-slider-admin-wrapper'>";
            $output_html .= "<h1>Bearded Children Slider Options</h1>";
            $output_html .= "<form name='bc-slider-options' method='post' action='".str_replace( '%7E', '~', $_SERVER['REQUEST_URI'])."' enctype='multipart/form-data'>";
                $output_html .= "<h3>Add Slide</h3>";
                $output_html .= "<div id='bc_slide_options_container'></div>";
                $output_html .= "<input type='button' onclick='add_slide()' value='+' class='bc-add-slide-btn' />";
                $output_html .= "<input type='hidden' name='hidden' value='Y' />";
                $output_html .= "<input type='submit' value='Save Slideshow' class='bc-submit-btn'/>";
            $output_html .= "</form>";
        $output_html .= "</div>"; 
        
        echo $output_html;

        $num_existing_slides = get_option("bc-slider-num-slides");
        $n=0;
        if( $num_existing_slides > 0 ) {

			echo '<script type="text/javascript">window.onload = function() { ';
            while( $n+1 <= $num_existing_slides ) {
                echo 'add_slide();';
                $n++;
            }
			echo '}</script>';
           // echo '<script type="text/javascript">populate_sliders();</script>';
        } 

     }
     
?>