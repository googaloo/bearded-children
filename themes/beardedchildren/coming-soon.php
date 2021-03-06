<?php

/*
 * 
 *  Template Name: Coming Soon
 * 
 */
?>

<?php

$the_email = $_POST['email_sub'];

if( isset($the_email) ) {
    
    if ( is_email($the_email) ) {
      
        $email_exists = collect_email($the_email);

         if( $email_exists == 1 ) {

              $email_html = '
             
             <p class="email_exists_text"><span class="bold">Hey!</span> We are already friends! We got yo email!</p>
             <a href="'.get_bloginfo("url").'" style="float:right;">Another email?</a>

              ';

         } elseif ( $email_exists == 0 ) {

              $email_html = '

             <p class="email_thanks"><span class="bold">Thank you!</span> We will keep you updated! </br> In the meantime, take a look at our <a href="http://www.youtube.com/users/beardedchildrenDOTcm">YOUTUBE</a> page :) </p>

               ';

         } else {

             $email_html = '

             <p style="color: #FFFFFF;">Uh oh! There was a problem!</p>
             <a href="'.get_bloginfo("url").'">Try again</a>

               ';

         }

     } else {

             $email_html = '

             <p style="color: #FFFFFF; float:right;">Uh oh! There was a problem!</p>
             <a href="'.get_bloginfo("url").'" style="float:right; clear:both;">Try again</a>

               ';

     }

  } else {
      
        $email_html = '

            <form action = "" method="post">
                <input type="email" placeholder="Enter your Email" class="email_input" name="email_sub" />
                <img src = "'.get_bloginfo("template_directory").'/images/coming-soon/email_go.png" class="email_go"  onclick="document.forms[0].submit()" />
            </form>

        ';
      
  }

?>

<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bearded Children - Throw away the aftershave!</title>
<link href='<?php bloginfo("template_directory")?>/normalize.css' type='text/css' rel='stylesheet' />
<link href='<?php bloginfo("template_directory")?>/coming-soon-style.css' type='text/css' rel='stylesheet' />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<style type="text/css" rel="stylesheet">
    
    .kid-bg {
        
        background: url('<?php echo bloginfo("template_directory"); ?>/images/coming-soon/background-kid.jpg') no-repeat;
        
    }
    
@media screen and (max-width: 1280px) {

    .kid-bg {
        
        background: url('<?php echo bloginfo("template_directory"); ?>/images/coming-soon/1280_BG.jpg') no-repeat;
    
    }

}

@media screen and (max-width: 1024px) {
    
    .kid-bg {

        background: url('<?php echo bloginfo("template_directory"); ?>/images/coming-soon/1024_BG.jpg') no-repeat;
        
    }
        
}

@media screen and (max-width: 915px) {
    
    .kid-bg {

        background: url('<?php echo bloginfo("template_directory"); ?>/images/coming-soon/800_BG.jpg') no-repeat;
        
    }
        
}

@media screen and (max-width: 750px) {
    
    .kid-bg {

        background: url('<?php echo bloginfo("template_directory"); ?>/images/coming-soon/mobile_landscape_BG.jpg') no-repeat;
        
    }
        
}
    
@media screen and (max-width: 440px) {
    
    .kid-bg {

        background: url('<?php echo bloginfo("template_directory"); ?>/images/coming-soon/mobile_BG.jpg') no-repeat;
        
    }
        
}
    
</style>

<?php
    wp_head();
?>
</head>

<html>
<body>
    
    <div class = 'container'>
        
        <div class = "kid-bg" >
        
            <div class = 'content' id="content">

                <h2 class = 'growing'>our beards are still growing.</h2>
                
                <div class = "email_container">
                    <?php echo $email_html; ?>                   
                </div><!-- end email_container -->
                
                <div class = 'check-container'>
                    
                    <h2 class='check-out'>Check us out on</h2>
                    <a href="http://www.youtube.com/user/beardedchildrenDOTcm"><img class = 'youtube-img' src = '<?php echo bloginfo('template_directory'); ?>/images/coming-soon/youtube.png' /></a>
                    
                </div><!-- end check-container -->

            </div>
        
        </div>

    </div><!-- end container -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36931897-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>