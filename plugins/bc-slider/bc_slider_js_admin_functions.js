/*
 * HANDLE ADMIN FORMS ANIAMTIONS AND CONTROLS
 */

var num_slides = 0;

function add_slide() {
    
    num_slides++;
    // to pass how many slides were created
    // show hidden submit btn when slide is added
    $('.bc-submit-btn').show();

    // Creating div to be added
    var new_slide = '<div class="slide-'+num_slides+' bc-new-slide-box">';
    
        new_slide += '<h2 class="bc-slider-slide-num">Slide '+num_slides+'</h2>';
        
        new_slide += '<div class="bc-admin-slider-left">';

            // Image
            new_slide += '<h3 class="bc-slider-admin-title">Main Slide Image<span class="bc-ie-text">(890 x 335)</span></h3>';
            new_slide += '<input type="file" name="slide-'+num_slides+'-main-image" class="bc-slider-input" />';
            // Sidebar image
            new_slide += '<div class="bc-slider-admin-sidebar-box">';
                new_slide += '<h3 class="bc-slider-admin-title">Sidebar Image</h3>';
                new_slide += '<div style="float:left; width: 50%;">';
                    new_slide += '<p class ="bc-slider-admin-subtitle">Choose existing image</p>';
                    new_slide += '<select>';
                        new_slide += '<option value="none">Select Image</option>';
                        new_slide += '<option value="fk">Fruit Kingdom</option>';
                        new_slide += '<option value="boe">Bits of 8</option>';
                        new_slide += '<option value="rec">Recasts</option>';
                    new_slide += '</select>';
                new_slide += '</div>';
                new_slide += '<div style="float:right; width: 50%;">';
                    new_slide += '<p class="bc-slider-admin-subtitle" style="float:right; display:block; margin-right: 10px;">Upload new Sidebar image</p><span class="bc-ie-text" style="float:right; margin: 0; margin-right: 10px; display: block;">(350 x 280)</span>';
                    new_slide += '<input type="file" name="slide-'+num_slides+'-sidebar-image" class="bc-slider-input" />';
                    new_slide += '<p class="bc-slider-admin-subtitle" style="float:right; display:block; margin-right: 10px;">Name of Sidebar image</p>';
                    new_slide += '<input type="text" name="new-sidebar-name" />';
                new_slide += '</div>';
            new_slide += '</div><!-- end bc-admin-sidebar-box -->';
            // Description
            new_slide += '<h3 class="bc-slider-admin-title">Description</h3>';
            new_slide += '<textarea name="slide-'+num_slides+'descr" class="bc-slider-input" rows="4" cols="70"></textarea>';
        
        new_slide += '</div><!-- end .bc-admin-slider-left -->';
        
        //Button
        new_slide += '<div class="bc-admin-slider-right">';
        
            // Button Color
            new_slide += '<h3 class="bc-slider-admin-title">Call to Action button color<span class="bc-ie-text">(ie: CCCCC)</span></h3>';
            new_slide += '<input type="text" name="slide-'+num_slides+'-btn-color" class="bc-slider-input" />';
            // Button Text
            new_slide += '<h3 class="bc-slider-admin-title">Button text<span class="bc-ie-text">(ie: Watch now!)</span></h3>';
            new_slide += '<input type="text" name="slide-'+num_slides+'-btn-text" class="bc-slider-input" />';
            new_slide += '<input type="hidden" name="slide-num" value="'+num_slides+'" />';
            new_slide += '</div><!-- end .bc-admin-slider-right -->';
    
        new_slide +='</div><!-- end bc-new-slide-box -->';
    
    if(num_slides <= 6) {
        
        // Appending the new slide div
        $('#bc_slide_options_container').append(new_slide);
        
    } else {
        
        alert("You can only have 6 slides. If you really want more, talk to Rusty...");
        
    }

}

// to populate sliders if they exist -- called by PHP if number of sliders are greater than 0
function populate_sliders() {
    alert("nailed it");
}