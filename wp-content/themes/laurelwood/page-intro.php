<?php
/*
Template Name: Page With Intro
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
		if($post->post_parent){
			echo '<ul>';
			wp_list_pages('title_li=&exclude_tree=193&child_of='.$post->post_parent);
			
				echo '<li class="page_item page-item-138"><a href="';
				echo get_permalink(138); 
				echo '">On Tap</a></li>'; 

			echo '</ul>';
			}
		?>
    </div><!-- END SPACER -->
</div><!-- END INTROBOX -->

<div id="columntopcap" style="margin-top: 15px;"></div>
<div id="columnwrap">

            <div class="spacerpage">

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

    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>