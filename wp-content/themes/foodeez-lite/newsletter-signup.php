<?php
/*
Template Name: Newsletter
*/
?>
<?php get_header(); ?>
<?php global $foodeez_lite_shortname; ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="bread-title-holder">
    <div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
    <div class="container">
        <div class="row-fluid">
          <div class="container_inner clearfix">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if ((class_exists('foodeez_lite_breadcrumb_class'))) {$foodeez_lite_breadcumb->custom_breadcrumb();} ?>
           </div>
         </div>
    </div>
</div>

<div class="page-content default-pagetemp">
    <div class="container post-wrap">
        <div class="row-fluid">
            <div id="content" class="span12">
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Enter your email below:</a></h2>
                                 
                    <div class="entry">                                                       
                        <div id="newsletter">
                            <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" method="post">
                            
                                <div><input type="hidden" name="username" value="Laurelwood" />
                                <input type="hidden" name="notification" value="mdekalb1@gmail.com" />
                                <input type="hidden" name="contactemail" value="mdekalb1@gmail.com" />
                                <input type="hidden" name="contactname" value="Laurelwood Brewery" />
                                
                                <input type="text" name="ea" maxlength="120" value="email address" 
                                onfocus="if (this.value == 'email address') { this.value='';}" onblur="if (this.value == '') { this.value='email address';}" 
                                style="font-size: 20px; padding: 2px 4px;" id="inputemail"  /><br />
                                
                                <input type="submit" value="Submit" id="inputsubmit" name="go" style="font-size: 20px; padding: 2px 4px;" />
                                
                                <input type="hidden" name="llr" value="tiosxufab">
                <input type="hidden" name="m" value="1105576147219">
                <input type="hidden" name="p" value="oi">
                                <input type="hidden" name="thankyou_firstdouble" value="<?php echo get_option('home'); ?>/please-confirm" />
                                <input type="hidden" name="thankyou_message" value="<?php echo get_option('home'); ?>/thank-you" />
                                </div>
                            </form> 
                        </div>
                    </div>
                    <!-- skepost -->
                </div>
                <!-- post -->

                <?php endwhile; ?>
                <?php else :  ?>
                    <div class="post">
                        <h2><?php _e('Not Found','foodeez-lite'); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
            <!-- content --> 
        </div>
    </div>
</div>
<?php get_footer(); ?>