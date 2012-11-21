<?php

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

?>
