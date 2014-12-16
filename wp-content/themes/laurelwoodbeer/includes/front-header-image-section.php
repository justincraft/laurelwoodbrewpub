<div class="Skt-header-image">
	<!-- header image -->
		<div class="foodeez-image-post"><img alt="foodeez-default-slider-image" class="ad-slider-image" width="1585"  src="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_frontslider_stype')) { echo foodeez_lite_get_option($foodeez_lite_shortname.'_frontslider_stype'); } else { echo get_template_directory_uri().'/images/Foodies-slider-image.jpg';}?>" ></div>
	<!-- end  header image  -->
	<!-- <div id="easingslider-container" style="margin:0 auto; width:100%; text-align:center;"><div id="easingslider" style="width:auto;"><?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?></div> -->
	<?php 
    echo do_shortcode("[metaslider id=5577]"); 
	?>
</div>