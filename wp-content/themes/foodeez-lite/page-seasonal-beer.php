<?php
/*
Template Name: Single Beer Page
*/
?>
<?php get_header(); ?>

<div id="columntopcap" style="margin-top: 45px;"></div>
<div id="columnwrap">


            <div class="spacerbeers">

                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
    
                <div id="post-<?php the_ID(); ?>" class="post">
                
                <img id="beerphoto" src="<?php echo(get_post_meta($post->ID, 'beerphoto', true)); ?>" alt="<?php the_title(); ?>" class="alignright" />

                                 
                    <div class="entry" style="width: 500px; float: left;">  
                    
                    
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                                                         
                        <?php the_content(); ?>
                        

                        
                    </div>
                    
                    
                                                            
                </div><!--/post-->
             
            
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