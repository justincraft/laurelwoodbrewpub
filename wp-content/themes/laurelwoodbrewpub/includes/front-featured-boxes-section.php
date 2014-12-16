<?php global $laurelwoodbrewpub_shortname; ?>

<div id="featured-box" class="skt-section">
	<div class="container">
		<div class="mid-box-mid row-fluid"> 
			<!-- Featured Box 1 -->
			<div class="mid-box span3">
				<div class="skt-iconbox iconbox-top">		
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">	
							<a class="skt-featured-images" href="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_link")) { echo esc_url(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_link")); } else { echo '#';} ?>" title="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_heading"); } ?>">
									<img class="skin-bg" src="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb1_first_part_image')) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb1_first_part_image','laurelwoodbrewpub'); } else { echo get_template_directory_uri().'/images/celebration-315079_1280.jpg'; }  ?>" alt="boximg"/>	  
							</a>
					</div>		
					<div class="iconbox-content">		
						<h4><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_heading"); } else { echo 'Five Course Meal';} ?></h4>			
						<p><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_content")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb1_first_part_content"); } else { echo 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';} ?></p>		
					</div>			
					<div class="clearfix"></div>	
				</div>
			</div>
			<!-- Featured Box 2 -->
			<div class="mid-box span3" >
				<div class="skt-iconbox iconbox-top">
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">						  
						<a class="skt-featured-images" href="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_link")) { echo esc_url(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_link")); } else { echo '#';} ?>" title="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_heading"); } ?>">
								<img class="skin-bg" src="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb2_second_part_image')) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb2_second_part_image','laurelwoodbrewpub'); } else { echo get_template_directory_uri().'/images/pan-seared-salmon-belly-250866_1920.jpg'; }  ?>" alt="boximg"/>
						</a>	
					</div>		
					<div class="iconbox-content">		
						<h4><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_heading"); } else { echo 'Candle Light Dinners';} ?></h4>				
						<p><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_content")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb2_second_part_content"); } else { echo 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';} ?></p>			
					</div>			
					<div class="clearfix"></div>	
				</div>
			</div>
			<!-- Featured Box 3 -->
			<div class="mid-box span3" >
				<div class="skt-iconbox iconbox-top">		
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">			
						<a class="skt-featured-images" href="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_link")) { echo esc_url(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_link")); } else { echo '#';} ?>" title="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_heading"); } ?>">				
								<img class="skin-bg" src="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb3_third_part_image')) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb3_third_part_image','laurelwoodbrewpub'); } else { echo get_template_directory_uri().'/images/pasta-250872_1920.jpg'; } ?>" alt="boximg"/>
						</a>
					</div>			
					<div class="iconbox-content">			
						<h4><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_heading"); } else { echo 'Delightful Desserts';} ?></h4>				
						<p><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_content")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb3_third_part_content"); } else { echo 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';} ?></p>		
					</div>		
					<div class="clearfix"></div>	
				</div>
			</div>
			<!-- Featured Box 4 -->
			<div class="mid-box span3">
				<div class="skt-iconbox iconbox-top">		
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">	
							<a class="skt-featured-images" href="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_link")) { echo esc_url(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_link")); } else { echo '#';} ?>" title="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_heading"); } ?>">
									<img class="skin-bg" src="<?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb4_fourth_part_image')) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname.'_fb4_fourth_part_image','laurelwoodbrewpub'); } else { echo get_template_directory_uri().'/images/spaghetti-237907_1920.jpg'; } ?>" alt="boximg"/>	  
							</a>
					</div>		
					<div class="iconbox-content">		
						<h4><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_heading")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_heading"); } else { echo 'Finest Wine Collection';} ?></h4>			
						<p><?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_content")) { echo laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_fb4_fourth_part_content"); } else { echo 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';} ?></p>		
					</div>			
					<div class="clearfix"></div>	
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="skt-section">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<?php include_once('/var/www/vhosts/laurelwoodbrewpub.com/beer/wp-content/themes/laurelwoodbrewpub/includes/laurelwood.instagram.php'); ?>
				<?php echo showInstagramGrid( "laurelwoodbrewingco", 12, false ); ?>
			</div>
		</div>
	</div>
</div>