<?php
/*
Template Name: Page With Shopp Sidebar
*/
?>
<?php get_header(); ?>

<div id="columntopcap"></div>
<div id="columnwrap">

            <div class="spacerphotos">

                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
    
                <div id="post-<?php the_ID(); ?>" class="post">

                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                 
                    <div class="entry">                                                       
                        <?php the_content(); ?>
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




<div id="rightcol">
    
    <div class="box2">
        <div class="spacer">
        
			<!-- Add you sidebar manual code here to show above the widgets -->

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Shopp Sidebar') )  ?>		           

			<!-- Add you sidebar manual code here to show below the widgets -->
            
        </div>
        <!--/spacer -->
    </div>
    <!--/box2 -->
</div>
<!--/rightcol -->



    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>