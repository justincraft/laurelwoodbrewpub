<?php get_header(); ?>

<div id="columntopcap"></div>
<div id="columnwrap">

	<div id="columns">
		<div id="centercol">
			<div class="box">

				<div class="spacer">

					<?php if(have_posts()) : ?>
					
					<?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post">
    
						<?php $category = get_the_category(); // To show only 1 Category ?>            
                        
                                               
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        
                        <div class="entry"> 
                        <div class="date"><?php the_time('F j, Y'); ?> <?php comments_popup_link( 'No comments yet', '1 comment', '% comments'); ?></div>
                        
						<?php if ( get_option('woo_the_content') ) { the_content('<div class="btn-continue">Continue Reading</div>'); } else { the_excerpt(); ?>
                        <div class="btn-continue"><a href="<?php the_permalink() ?>">Continue Reading</a></div>
                        <?php } ?>
                    	<div class="fix"></div>
                        </div><!-- END ENTRY -->
                    </div><!--/post-->                            
        
                    <?php endwhile; ?>
        
					<div class="fl btn_older"><?php next_posts_link('<span class="disappear">&laquo; Older Entries</span>') ?></div>
					<div class="fr btn_newer"><?php previous_posts_link('<span class="disappear">Newer Entries &raquo;</span>') ?></div>
                                        
					<br class="fix" />
        
                    <?php endif; ?>
                
				</div>
				<!--/spacer -->

			</div>
			<!--/box -->
		</div>
		<!--/centercol -->

<?php get_sidebar(); ?>

		<br class="fix" />
	</div>
	<!--/columns -->

</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>