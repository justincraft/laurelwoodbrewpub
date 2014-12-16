<?php
	/*Template Name: Mockup2*/
 ?>

<?php include(TEMPLATEPATH."/header-mockup2.php");?>

   
    <!-- Featured Slider -->
    
	<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

    <!-- Bottom Widgets -->
	<?php if ( function_exists('dynamic_sidebar') && (is_sidebar_active(5) || is_sidebar_active(6) || is_sidebar_active(7)) ) : // Don't show on the front page ?>
    
	<div id="columns">
		<div class="col6">
			<?php dynamic_sidebar(5); ?>		           
		</div>
		<!--/col6 -->
		<div class="col6">
			<?php dynamic_sidebar(6);  ?>		           
		</div>
		<!--/col6 -->
		<div class="col6 last">
        
        	<div id="youtube_vdo">
			<?php dynamic_sidebar(7);  ?>
            </div>
            <div id="dummy_img" style="display:none; padding:60px 25px;">
            <img src="<?php bloginfo('template_directory'); ?>/images/vdoimg.png" />
            </div>		           
		</div>
		<!--/col6 -->
		<br class="fix" />
		<div class="btm-wrapper">
		<div class="btm-left">
		   <div class="left-image">
		   <img src="<?php bloginfo('template_directory'); ?>/images/photo.jpg" alt="img" />
		   </div>
   
		   <div class="left-txt-wrapper">
		   <h2>Keg Sales</h2>
		   <p>Please call the brewery to reserve your keg. All kegs are filled to order on a first come first serve basis.</p>
		
		  <p><strong>Please call the brewery to reserve your keg. 503-282-4948</strong></p>
		  <a href="http://www.laurelwoodbrewpub.com/on-tap/keg-sales/" class="read-btn"><img src="<?php bloginfo('template_directory'); ?>/images/read-more.jpg" alt="read more" style="padding-top:33px;" /></a>
		   </div>
        </div>

		<div class="btm-right">
		<h2>LAURELWOOD BLOG</h2>
		<ul>
		<?php wp_get_archives('title_li=&type=postbypost&limit=3'); ?>
		</ul>
		<a href="http://www.laurelwoodbrewpub.com/category/blog/" class="read-btn"><img src="<?php bloginfo('template_directory'); ?>/images/view-btn.jpg" alt="view more" /></a>
		</div>
</div>
		<br class="fix" />
	</div>
	<!--/columns -->
    
    <?php endif; ?>

<?php get_footer(); ?>    
 <script>
 jQuery(document).ready(function(){
	popup_p = jQuery('#modalback');
	video_p = jQuery('#youtube_vdo');
	image_p = jQuery('#dummy_img');
	if(popup_p.css('display') == 'block'){
	video_p.css('display','none');
	image_p.css('display','block');
	}
	});
 </script>     