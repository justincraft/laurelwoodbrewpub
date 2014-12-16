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
                        
        <?php global $post; ?>
       <h3 id="h_beerstats"><span class="disappear">Beer Stats</span></h3>
                <ul class="beerstats">
                    <li><strong>Alcohol Content:</strong> <?php echo(get_post_meta($post->ID, 'alcoholcontent', true)); ?></li>
                    <li><strong>IBUs:</strong> <?php echo(get_post_meta($post->ID, 'ibus', true)); ?></li>
                    <li><strong>Original Gravity:</strong> <?php echo(get_post_meta($post->ID, 'originalgravity', true)); ?></li>
                    <li><strong>Terminal Gravity:</strong> <?php echo(get_post_meta($post->ID, 'terminalgravity', true)); ?></li>
                    <li><strong>Malt:</strong> <?php echo(get_post_meta($post->ID, 'malt', true)); ?></li>
                    <li><strong>Hops:</strong> <?php echo(get_post_meta($post->ID, 'hops', true)); ?></li>			
                </ul>
            	<br class="clearer" />
                        
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