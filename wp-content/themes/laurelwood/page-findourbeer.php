<?php
/*
Template Name: Find Our Beer
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




<div id="hasphoto">

<h3 id="h_wehavefood"><span class="disappear">We have food too</span></h3>
<p>We serve our own quality beers and a diverse menu.  All Laurelwood restaurants support local, sustainable &amp; organic products whenever possible. <a href="/locations-menus/">View all our locations and menus &raquo;</a></p>
        
			<?php
				 $lastposts = get_posts('numberposts=-1&post_type=page&post_parent=244&orderby=menuorder&order=ASC');
				 foreach($lastposts as $post) :
					setup_postdata($post);
				 ?>
                 
                 <div id="post-<?php echo $post->ID; ?>" class="post">
                 
                 <h3><a href="<?php echo get_permalink(140) ?>"><?php the_title(); ?></a></h3>  
                     	<a href="<?php echo get_permalink(140) ?>"><img src="<?php echo(get_post_meta($post->ID, 'locationlarge', true)); ?>" alt="<?php the_title(); ?>" style="width: 275px;" class="findlocation" /> </a>                     
               
                 <div class="entry">
                         <?php echo(wpautop(get_post_meta($post->ID, 'address', true))); ?>
                 <?php // the_excerpt(); ?>
                	</div><!-- END ENTRY -->
                    <br class="clearer" />
                </div><!-- END POST -->
			 <?php endforeach; ?>
            
</div>
<!--/rightcol -->



    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>