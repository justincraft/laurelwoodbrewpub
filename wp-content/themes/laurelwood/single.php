<?php get_header(); ?>



<div id="columntopcap"></div>
<div id="columnwrap">

	<div id="columns">
		<div id="centercol">
			<div class="box">
				<div class="spacer">

					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
        
                    <div id="post-<?php the_ID(); ?>" class="post">
    
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="date">Posted on <?php the_time('F j, Y'); ?></div>
                                     
                        <div class="entry">                                                       
                            <?php the_content(); ?>
                        </div>
                                            
                        <?php the_tags(' <p><strong>Tags: </strong>', ', ' , '</p>'); ?>
                    
                    </div>
                    <!--/post-->
        
                    <div id="comments"><?php comments_template(); ?></div>
        
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

<?php get_sidebar(); ?>

		<br class="fix" />
	</div>
	<!--/columns -->
		<br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>