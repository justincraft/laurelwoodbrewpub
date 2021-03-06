<?php
	// Split the featured pages from the options, and put in an array
	$featpages = get_option('woo_featpages');
	$featarr=split(",",$featpages);
	$featarr = array_diff($featarr, array(""));
?>

<div class="box5">
    <div class="spacer">
        <div class="btn-arr2" <?php if ( get_option('woo_featheight') != "") { ?>style="padding-top: 120px"<?php } ?>><a href="javascript:stepcarousel.stepBy('mygallery', -1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arr-left.gif" alt="Back" /></a></div>
                
        <div class="wrapper">

			<div id="mygallery" class="stepcarousel" <?php if ( get_option('woo_featheight') != "") { ?>style="height: <?php echo get_option('woo_featheight');  ?>px"<?php } ?>>

				<div class="belt">
        
                    <?php foreach ( $featarr as $featitem ) { ?>
                    
                    <?php query_posts('page_id=' . $featitem); ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		        					
        
                
                	<div class="panel">
                    
                    	<?php if (!get_post_meta($post->ID, "image", true)) : // Show full size if page doesn't contain image in custom field ?>

                        	<div class="post">
                              <!--  <h2><?php the_title(); ?></h2>-->
                                <?php the_content(); ?>
                            </div>

                        <?php else : ?>
                         
                        <div class="col4 post">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <!--/col4 -->
                        <div class="col5">
                        
                        <?php if (get_option('woo_resize')) { // Check if we should use the image resizer ?>

                            <a href="<?php echo get_post_meta($post->ID, "url", true); ?>" title="View Project Details for <?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", true); ?>&amp;h=250&amp;w=390&amp;zc=1&amp;q=90" alt="Preview - <?php the_title(); ?>" /></a>
                        
                        <?php } else { ?>
                        
                            <a href="<?php echo get_post_meta($post->ID, "url", true); ?>" title="View Project Details for <?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" alt="Preview - <?php the_title(); ?>" /></a>
                        
                        <?php } ?>
                        
                        </div>
                        
                        <?php endif; ?>
                        
                        <br class="fix" />

					</div>
                    
					<?php endwhile; endif; ?>
                    
                    <?php } ?>
				</div>

			</div>

        </div>
        <!--/wrapper -->
       
        <div class="btn-arr2 fr" <?php if ( get_option('woo_featheight') != "") { ?>style="padding-top: 120px"<?php } ?>><a href="javascript:stepcarousel.stepBy('mygallery', 1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/arr-right.gif" alt="Forward" /></a></div>
        <br class="fix" />
    </div>
    <!--/spacer -->
    <div class="bot"></div>
</div>
<!--/box5 -->