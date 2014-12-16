<?php
/*
Template Name: Locations Page
*/
?>
<?php get_header(); ?>

<div id="introbox">
	<div class="spacer">
		<?php global $post; ?>
        <img src="<?php $photofield = get_post_meta($post->ID, 'introphoto', true); echo $photofield; ?>" alt="" class="alignright" />
        <h2><?php $titlefield = get_post_meta($post->ID, 'sectiontitle', true); echo $titlefield; ?></h2>
        <p><?php $textfield = get_post_meta($post->ID, 'introtext', true); echo $textfield; ?></p>

    </div><!-- END SPACER -->
</div><!-- END INTROBOX -->

<div id="columntopcap" style="margin-top: 15px;"></div>
<div id="columnwrap" style="padding-bottom: 30px;">

<div class="alocation">
           
    <?php
    $mycounter = 0;
    $lastposts = get_posts('numberposts=-1&post_type=page&post_parent=140&orderby=menuorder&order=ASC');
    foreach($lastposts as $post) :
    setup_postdata($post);
    ?>
     
    <div id="post-<?php echo $post->ID; ?>" class="post" style="clear:right;">
     
        <div class="locationphotos" style="float:right;">
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
        </div>     
        
        <div class="entry" style="">
            <h2><?php the_title(); ?></h2>

            <div class="locationinfo" style="float:right;">
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

            <?php the_content(); ?>

    	</div><!-- END ENTRY -->
        
    </div><!-- END POST -->

    <?php $mycounter++; ?>
    <?php endforeach; ?>
    <br class="clearer" />
</div><!-- END ALOCATION -->

<br class="clearer" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>