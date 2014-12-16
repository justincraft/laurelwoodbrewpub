<?php
/*
Template Name: Contest Form
*/

function checkInput(){
	// if form contains invalid characters return 0
	foreach ($_REQUEST as $var) {
		if ((stristr($var, "cc:") != false) || (stristr($var,"bcc:") != false) || (stristr($var, "Content-type:") != false) || (stristr($var, "MIME-Version:") != false)) {
			return 0;
		}
	}
	return 1;
}

$showform = true;
$message = '';

if ($_POST['submitted']) {

	if (checkInput()) {
		$message = "\n Contest: " . $_POST["contestname"];
		$message .= "\n Name: " . $_POST["theirname"];
		$message .= "\n Email: " . $_POST["theiremail"];
		$message .= "\n\n";
		
		//$to = "Desi <desi@laurelwoodbrewpub.com>";
		$to = "Jill <jill@eroi.com>";
		// add multiple addresses separated by commas: Name <example@example.com>, NewName <example@example.com>
		$subject = "Laurelwood Contest Submission";
		$headers = "From: " . $_POST["theirname"] . " <" . $_POST["theiremail"] . ">\r\n";
		
		mail($to, $subject, $message, $headers) or die("email error");
		
		$showform = false;
		$message = "Thank you for submitting your entry!";
		
	} else {
		// email injection found
		$message = "Please use only regular letters and punctuation.<br />Email strings such as bcc: are not allowed.";
	}

	
	
}

?>
<?php get_header(); ?>

<div id="columntopcap"></div>
<div id="columnwrap">

            <div class="spacerphotos">

                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
    
                <div id="post-<?php the_ID(); ?>" class="post">

                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                 
                    <div class="entry">                                                       
                        <?php the_content();
                        
                        if ($message != '') {
							echo '<div style="color:#820E01;font-size:1.3em;">'.$message.'</div>';
						} 
                        
                        if ($showform) { ?>
                        <form id="contestform" action="<? echo $_SERVER['REQUEST_URI']?>" method="post">
                        <input type="hidden" name="submitted" value="1"/>
                        <input type="hidden" name="contestname" value="<? the_title(); ?>"/>
                        
                        <fieldset><legend>Please provide the following information to enter:</legend>
                        
                        <p><label for="theirname">Name <abbr title="required">*</abbr> </label>
                        <input name="theirname" type="text" id="name" class="required" value="<?php echo $_POST["theirname"]; ?>"/></p>
                        
                        <p><label for="theiremail">Email <abbr title="required">*</abbr></label>
                        <input name="theiremail" type="text" id="email" class="required" value="<?php echo $_POST["theiremail"]; ?>"/></p>
                        
                        
                        </fieldset>
                        
                        
                        <p><label>&nbsp;</label>
                        <input type="image" src="<?php bloginfo('template_directory'); ?>/images/bg_footersubmit.jpg" alt="Submit" id="formsubmit" /></p>
                        
                        </form>
                        <?php } ?>
                    </div>
                                                            
                </div>
                <!--/post-->
            
                <?php endwhile; else : ?>
    
                <div class="post box">
                    <div class="entry-head"><h2>404 - Not Found</h2></div>
                    <div class="entry-content"><p>The page you are looking for is not here.</p></div>
                </div>
    
                <?php endif; ?>
                <div class="fix"></div>
            
            </div>
            <!--/spacer -->




<div id="hasphoto">

        
			<!-- Add you sidebar manual code here to show above the widgets -->

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Photo Sidebar') )  ?>		           

			<!-- Add you sidebar manual code here to show below the widgets -->
            
</div>
<!--/rightcol -->



    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>