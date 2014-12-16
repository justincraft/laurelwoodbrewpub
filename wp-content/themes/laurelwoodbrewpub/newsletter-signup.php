<?php
/*
Template Name: Newsletter
*/
?>
<?php get_header(); ?>

<div id="columntopcap"></div>
<div id="columnwrap">

            <div class="spacerpage">

                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
    
                <div id="post-<?php the_ID(); ?>" class="post">

                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                 
                    <div class="entry">                                                       
                        <div id="newsletter">
            <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" method="post">
			
                <div><input type="hidden" name="username" value="Laurelwood" />
                <input type="hidden" name="notification" value="mdekalb1@gmail.com" />
                <input type="hidden" name="contactemail" value="mdekalb1@gmail.com" />
                <input type="hidden" name="contactname" value="Laurelwood Brewery" />
                
                <input type="text" name="ea" maxlength="120" value="email address hello!" onfocus="if (this.value == 'email address') { this.value='';}" onblur="if (this.value == '') { this.value='email address';}" id="inputemail"  /><br />
                
                <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/bg_footersubmit.jpg" alt="Submit" value="Submit" id="inputsubmit" name="go" />
                
                <input type="hidden" name="llr" value="tiosxufab">
<input type="hidden" name="m" value="1105576147219">
<input type="hidden" name="p" value="oi">
                <input type="hidden" name="thankyou_firstdouble" value="<?php echo get_option('home'); ?>/please-confirm" />
                <input type="hidden" name="thankyou_message" value="<?php echo get_option('home'); ?>/thank-you" />
                </div>
            </form> 
        </div>
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

    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>