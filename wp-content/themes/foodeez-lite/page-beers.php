<?php
/*
Template Name: Beer Switcher
*/
?>
<?php get_header(); ?>

<div id="introbox">
	<div class="spacer">
		<?php global $post; ?>
        
        <img src="<?php $photofield = get_post_meta($post->ID, 'introphoto', true); echo $photofield; ?>" alt="" class="alignright" />
        <h2><?php $titlefield = get_post_meta($post->ID, 'sectiontitle', true); echo $titlefield; ?></h2>
        <p><?php $textfield = get_post_meta($post->ID, 'introtext', true); echo $textfield; ?></p>
        <?php
		// If CHILD_OF is not NULL, then this page has a parent
		// Therefore, list siblings i.e. subpages of this page's parent
			echo '<ul style="width:100%;">';
			wp_list_pages('title_li=&child_of=138&exclude=193&exlude_tree=193');
			echo '</ul>';
		?>
    </div><!-- END SPACER -->
</div><!-- END INTROBOX -->


<div id="columntopcap" style="margin-top: 15px;"></div>
<div id="columnwrap">


            <div id="beerswitcher" class="spacerbeers">

			
            	<ul id="beerlogos">
            	 <?php
				 $lastposts = get_posts('numberposts=-1&post_type=page&post_parent=193&orderby=menuorder&order=ASC');
				 foreach($lastposts as $post) :
					setup_postdata($post);
				 ?> 
                 <li>               
        		<a href="#post-<?php echo $post->ID; ?>"><img src="<?php echo(get_post_meta($post->ID, 'beerlogo', true)); ?>" alt="<?php the_title(); ?>" /></a></li>
				
			 <?php endforeach; ?>
                 </ul>
            
            <div id="beerinfo">            
            
            	<?php
				 $lastposts = get_posts('numberposts=-1&post_type=page&post_parent=193&orderby=menuorder&order=ASC');
				 foreach($lastposts as $post) :
					setup_postdata($post);
				 ?>
                 
                 <div id="post-<?php echo $post->ID; ?>" class="post">
                 
                 <img src="<?php echo(get_post_meta($post->ID, 'beerphoto', true)); ?>" alt="<?php the_title(); ?>" class="beerphoto alignright" />
                 
                 <div class="entry">
                 <h2><?php if(get_post_meta($post->ID,'beernameimage',true)) { 
				 				echo '<img src="';
								echo(get_post_meta($post->ID, 'hops', true));
								echo '" alt="'.the_title().'" />'; 
							} else { 
								the_title(); 
							} ?>
                 </h2>
                 
                 
                 <?php the_content(); ?>
                 
                 <h3 class="h_beerstats"><span class="disappear">Beer Stats</span></h3>
                <ul class="beerstats">
                    <?php if(get_post_meta($post->ID, 'alcoholcontent', true)) { ?><li><strong>Alcohol Content:</strong> <span><?php echo(get_post_meta($post->ID, 'alcoholcontent', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'ibus', true)) { ?><li><strong>IBUs:</strong> <span><?php echo(get_post_meta($post->ID, 'ibus', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'originalgravity', true)) { ?><li><strong>Original Gravity:</strong> <span><?php echo(get_post_meta($post->ID, 'originalgravity', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'terminalgravity', true)) { ?><li><strong>Terminal Gravity:</strong> <span><?php echo(get_post_meta($post->ID, 'terminalgravity', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'malt', true)) { ?><li><strong>Malt:</strong> <span><?php echo(get_post_meta($post->ID, 'malt', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'hops', true)) { ?><li><strong>Hops:</strong> <span><?php echo(get_post_meta($post->ID, 'hops', true)); ?></span></li>	<?php } ?>		
                </ul>
            	<br class="clearer" />
                	</div><!-- END ENTRY -->
                
                </div><!-- END POST -->
          
			 <?php endforeach; ?>
              	<br class="clearer" />
           </div><!-- END BEERINFO -->

            <div class="fix"></div>
            
            </div><!--/spacer -->

    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>