<?php
/*
Template Name: Locations Child
*/
?>

<?php get_header(); ?>

<div id="columntopcap"></div>
<div id="columnwrap">

	<div id="columns">
		<div class="alocation">


					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post">
    
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="locationphotos">
                     	<img id="locationphoto-<?php echo $mycounter; ?>" src="<?php echo(get_post_meta($post->ID, 'locationlarge', true)); ?>" alt="<?php the_title(); ?>" class="thebigimage alignright" />
                        <?php
							$thebigimage = get_post_meta($post->ID, 'locationlarge', true);
							$moreviews1 = get_post_meta($post->ID, 'moreviews1', true);
							$moreviews2 = get_post_meta($post->ID, 'moreviews2', true);
							$moreviews3 = get_post_meta($post->ID, 'moreviews3', true);
						?>
                        <ul id="locthumb-<?php echo $mycounter; ?>" class="locthumbs">
                        	<?php if($thebigimage) { ?><li><a href="<?php echo $thebigimage; ?>"><img src="<?php echo get_location_thumb($thebigimage); ?>" alt="<?php the_title(); ?>" /></a></li><?php } ?>
                        	<?php if($moreviews1) { ?><li><a href="<?php echo $moreviews1; ?>"><img src="<?php echo get_location_thumb($moreviews1); ?>" alt="<?php the_title(); ?>" /></a></li><?php } ?>
                        	<?php if($moreviews2) { ?><li><a href="<?php echo $moreviews2; ?>"><img src="<?php echo get_location_thumb($moreviews2); ?>" alt="<?php the_title(); ?>" /></a></li><?php } ?>
                        	<?php if($moreviews3) { ?><li><a href="<?php echo $moreviews3; ?>"><img src="<?php echo get_location_thumb($moreviews3); ?>" alt="<?php the_title(); ?>" /></a></li><?php } ?>
                        </ul>
                        <br class="clearer" />
                     </div>
                                     
                        <div class="entry"> 
						<div style="float:right;" class="locationinfo">

<?php
                                                $menulink = get_post_meta($post->ID, 'menulink', true);
                                                $menulink2 = get_post_meta($post->ID, 'menulink2', true);
						$menulink3 = get_post_meta($post->ID, 'menulink3', true);
						$menulink4 = get_post_meta($post->ID, 'menulink4', true);
						?>

<?php echo(wpautop(get_post_meta($post->ID, 'address', true))); ?>
                     <?php if($menulink) { ?><a href="<?php echo(get_post_meta($post->ID, 'menulink', true)); ?>" class="btn_menu"><span class="disappear">Download our menu &raquo;</span></a><?php } ?><br><br>
                    <?php if($menulink2) { ?><a href="<?php echo(get_post_meta($post->ID, 'menulink2', true)); ?>" class="btn_menu2"><span class="disappear">Download our menu &raquo;</span></a><?php } ?><br><br>
                    <?php if($menulink3) { ?><a href="<?php echo(get_post_meta($post->ID, 'menulink3', true)); ?>" class="btn_menu3"><span class="disappear">Download our menu &raquo;</span></a><?php } ?><br><br>
                   <?php if($menulink4) { ?><a href="<?php echo(get_post_meta($post->ID, 'menulink4', true)); ?>" class="btn_menu4"><span class="disappear">Download our menu &raquo;</span></a><?php } ?>


                     
                     
                 </div>     
			    <?php the_content() ?>

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

			</div>
			<!--/box -->
		</div>
		<!--/centercol -->


		<br class="fix" />
	</div>
	<!--/columns -->

</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>

<?php get_footer(); ?>
