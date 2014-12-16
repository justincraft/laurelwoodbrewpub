<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<?php global $foodeez_lite_shortname, $foodeez_lite_themename; ?>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<script src="/wp-content/themes/foodeez-lite/js/jquery-1.11.1.min.js"></script>
</head>
<body <?php body_class(); ?> >
	<div id="wrapper" class="skepage">
	
<div class="slider-top clearfix">
		<div class="header-topbar clearfix" >
			<div class="container">      
					<div class="row-fluid">   
						<!-- #logo -->
						<div id="logo" class="span4">
							<?php if(foodeez_lite_get_option($foodeez_lite_shortname."_logo_img")){ ?>
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" ><img class="logo" src="<?php echo foodeez_lite_get_option($foodeez_lite_shortname."_logo_img"); ?>" alt="<?php echo foodeez_lite_get_option($foodeez_lite_shortname."_logo_alt"); ?>" /></a>
							<?php } else{ ?>
							<!-- #description -->
							<div id="site-title" class="logo_desp">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a> 
								<div id="site-description"><?php bloginfo( 'description' ); ?></div>
							</div>
							<!-- #description -->
							<?php } ?>
						</div>
						<!-- #logo -->
						<div class="span4">
							<!-- Top Contact Info -->
							<div class="topbar_info">
								<h4 style="color:#fdb813;">The place where friends and family meet</h4>
								<i class="fa fa-phone"></i><span class="head-phone-txt">NE: </span>&nbsp;<span class="head-phone"><a href="tel:1+503-282-0622"><?php echo '(503) 282-0622'; ?></a></span>
								<br>
								<i class="fa fa-phone"></i><span class="head-phone-txt">SE: </span>&nbsp;<span class="head-phone"><a href="tel:1+503-894-8267"><?php echo '(503) 894-8267'; ?></a></span>
								<br>
								<?php echo do_shortcode('[businesshours]Open Today {{TodayOpen}} to {{TodayClose}}[/businesshours]'); ?>
							</div>
							<!-- Top Contact Info -->
						</div>
						<div class="span4">
							<!-- Social Links Section -->
							<div class="social_icon">
								<ul class="clearfix">
									<li class="fb-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_fbook_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_fbook_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-facebook" title="Facebook"></span></a></li>
									<li class="tw-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_twitter_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_twitter_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-twitter" title="Twitter"></span></a></li>
									<!-- <li class="gplus-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_gplus_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_gplus_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-google-plus" title="Google Plus"></span></a></li> -->
									<li class="pinterest-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_pinterest_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_pinterest_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-pinterest" title="Pinterest"></span></a></li>
									<!-- <li class="linkedin-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_linkedin_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_linkedin_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-linkedin" title="Linkedin"></span></a></li> -->
									<!-- <li class="foursquare-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_foursquare_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_foursquare_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-foursquare" title="Foursquare"></i></span></a></li> -->
									<!-- <li class="flickr-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_flickr_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_flickr_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-flickr" title="Flickr"></span></a></li> -->
									<li class="youtube-icon"><a target="_blank" href="<?php if(foodeez_lite_get_option($foodeez_lite_shortname.'_youtube_link')){ echo esc_url(foodeez_lite_get_option($foodeez_lite_shortname.'_youtube_link','foodeez-lite')); } else { echo '#';} ?>"><span class="fa fa-youtube" title="Youtube"></span></a></li>
									<li><a href="javascript:void(0);" class="strip-icon search-strip" title="search"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
							<div style="text-align:right;">
								<a href="/about/join-our-newsletter/"><img src="http://laurelwoodbrewpub.com/wp-content/themes/laurelwood/images/newsletter-img.png"></a>
							</div>
							<!-- Social Links Section -->
						</div>
					</div>
			</div>					
		</div><!-- header-topbar -->
		<!-- search-strip -->
		<div class="hsearch" >
			<div class="container">
					<div class="row-fluid">
						<div class="skt-s-form">
							<form method="get" id="header-searchform" action="<?php echo esc_url(home_url('/')); ?>">
								<fieldset>
									<input type="text" value="" placeholder="Search Here ..." id="s" name="s">
									<input type="submit" value="Search" id="header-searchsubmit">
								</fieldset>
							</form>
							<div class="hsearch-close"><i class="fa fa-times"></i></div>
						</div>
					</div>
			</div>
		</div>
		<div id="header" class="skehead-headernav clearfix">
				<div id="skehead">
					<div class="container">      
						<div class="row-fluid"> 
							<!-- navigation-->
							<div class="top-nav-menu span1" style="text-align:center;">
								<a href="/"><img src="http://www.laurelwoodbrewpub.com/wp-content/uploads/2014/06/drank.widea_.png" style="padding-top:6px;"></a>
							</div>
							<div class="top-nav-menu span9">
							<?php 
								if( function_exists( 'has_nav_menu' ) && has_nav_menu( 'Header' ) ) {
									wp_nav_menu(array( 'container_class' => 'ske-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','menu' => 'Primary Menu','theme_location' => 'Header' )); 
								} else {
								?>
								<div class="ske-menu" id="skenav">
									<ul id="menu-main" class="menu">
										<?php wp_list_pages('title_li=&depth=0'); ?>
									</ul>
								</div>
								<?php } ?>
							</div>
							<!-- #navigation --> 
							<div class="span2">
								<div id="showTaplist" class="res-button"><?php _e('What\'s On Tap?','foodeez-lite'); ?></div>
							</div>
						</div>
					</div>
				</div>
				<!-- #skehead -->
		</div>
<!-- #header -->
		<div class="header-clone"></div>
</div>		
<!-- header image section -->
  <?php $classes = get_body_class(); ?>
  <?php if(in_array('front-page',$classes)) {  include("includes/front-header-image-section.php");} ?>



<div id="main" class="clearfix">