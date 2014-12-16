<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="oQhmZAwlBGXq35Lwmqy0A2WxE8ucJSLsc6zcgDfuRbs" />
<!-- DWM added Meta Tags 8/22/2012 -->
<!--Header Test-->
<link rel='canonical' href='<?php echo site_url(); ?>' />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="author" content="www.designswithmerit.com and www.searchthruster.com " />
<meta name="copyright" content="2001-2012 Laurelwood Public House and Brewery" />
<meta property="og:title" content="Laurelwood Public House and Brewery" />
<meta property="og:type" content="restaurant, brewery, gastro pub" />
<meta property="og:url" content="www.laurelwoodbrewpub.com" />
<meta property="og:image" content="http://www.laurelwoodbrewpub.com/wp-content/themes/laurelwood/images/logo-trans.png" />
<meta property="og:site_name" content="Laurelwood Public House and Brewery" />
<!-- END DWM added Meta Tags 8/22/2012 -->

<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/ie7.css" />
<![endif]-->    
    
<!--[if lt IE 7]>
<script src="<?php bloginfo('template_directory'); ?>/includes/js/googlejs.js" type="text/javascript"></script>
<![endif]-->

<script type="text/javascript" src="/wp-content/themes/laurelwood/includes/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/laurelwood/includes/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript"><!--
$(document).ready(function() {
	$("#beerswitcher").tabs();
	$("div#introbox li.page_item a").text('');		
	$("input.addtocart").val('');		
});
//-->
</script>
<?php if(is_page('701')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){  
    $("#donationform").validate();	
	$("#yesalcohol").click(function() {
		$("#ifyesalcohol").show();
	});
	$("#noalcohol").click(function() {
		$("#ifyesalcohol").hide();
	});
	
	$("#yesurl").click(function() {
		$("#ifyesurl").show();
	});
	$("#nourl").click(function() {
		$("#ifyesurl").hide();
	});
  });
</script>
<?php } ?>

<?php if(is_page_template('contest.php')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){  
    $("#contestform").validate();	
  });
</script>
<? } ?>

<?php if (is_page(140)) { 
echo '<script type="text/javascript" src="/wp-content/themes/laurelwood/includes/js/photoswitch.js"></script>';
 } ?> 

<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'> 
</head>

<body>

<div id="pagewrap-mockup2">
  
<div id="page">

	<div id="header">
    	
        <div id="logo">
            <h1>
            	<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>">
            		<img src="<?php bloginfo('template_directory'); ?>/images/logo-trans.png" alt="<?php bloginfo('name'); ?>" />
                </a>
            </h1>
			<div class="social-media"><a href="https://twitter.com/#!/laurelwood1" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" /></a><a href="http://www.facebook.com/laurelwoodbrewpub" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook" /></a><a href="http://pinterest.com/laurelwoodbrew/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/pinterest.png" alt="pinterest" /></a><a href="http://www.youtube.com/user/laurelwoodbrewingco" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/you-tube.png" alt="you tube" /></a></div>
        </div>

		<div id="nav-mc2">
			<ul>			
				<?php woo_show_pagemenu( get_option('woo_menupages') ); ?>
				<li><a href="<?php bloginfo('url'); ?>/shop/">Shop</a>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/shop/cart/">Cart</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/tag/short+sleeved/">Shirts</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/category/hats/">Hats</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/category/accessories/">Accessories</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/wallpaper/">Wallpaper</a></li>
					</ul>
				</li>
				<?php if ( get_option('woo_addblog') ) { ?><li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); echo get_option('woo_blogcat'); ?>" title="Blog"><span>News &amp; Events</span></a></li><?php } ?>
			</ul>
		</div>
		<!--/nav1-->
	
	
        <div style="position:absolute;top:167px;left:234px;font-family: 'Satisfy', cursive;"><h2 style="color:#f7e1bd;">The place where friends and family meet</h2></div>
		<a href="<?php bloginfo('url'); ?>/about/join-our-newsletter/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/newsletter-img.png" alt="Join Our Newsletter" style="float:right; padding-top:24px;" /></a>
	</div>
	<!--/header -->
    