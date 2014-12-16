<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<!-- <script type="text/javascript" src='http://s.singleplatform.com/js/mobile_redirect.js'></script> -->
<script type="text/javascript">
// if(top.location != "http://laurelwoodbrewpub.com/"){}
// else{
// if(document.referrer)
// {
// if(document.referrer.indexOf('m.singlepage') == -1)
// redirect_mobile_browser(navigator.userAgent||navigator.vendor||window.opera,'http://m.singlepage.com/laurelwood---se-portland/other_locations');
// }
// else
// redirect_mobile_browser(navigator.userAgent||navigator.vendor||window.opera,'http://m.singlepage.com/laurelwood---se-portland/other_locations');
// }
</script>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="oQhmZAwlBGXq35Lwmqy0A2WxE8ucJSLsc6zcgDfuRbs" />

<title>Laurelwood Public House & Brewery | Portland Craft Beer | Brew Pub & Microbrews</title>
<meta name="description" content="Welcome to Laurelwood Public House & Brewery. Find some of the best handcrafted beers on tap in Portland, Oregon. The place where beer, family, and friends meet." />
<meta name="keywords" content="ales, porters, stouts, pilsners, lagers, craft brewery, craft distillery, beer, pubs, gastropub, tap room, embassies, home brewing, brewing, craft beer, portland beer, portland oregon beer, portland brewery, portland oregon brewery" />

<!-- DWM added Meta Tags 8/22/2012 -->
<link rel="canonical" href="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"/>
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

<!-- BEGIN CHECK 21 -->
<SCRIPT TYPE="text/javascript">
document.write('<div id="modalback" style="position:absolute;top:0px;left:0px;display:none; -moz-opacity:.50; filter:alpha(opacity=50); opacity:.50;z-index:999998;width:100%;height:100%;background-color:#000"></div><div id="21check" style="z-index:999999;display:none;position:absolute;top:20px"><div class="popup"><div class="big-image"><img src="/wp-content/themes/laurelwood/images/laurel-agegate.jpg" alt="" /></div><div class="tagline"><h2>Laurelwood Brewing Co. requires you to be 21 years old or older to enter this site.</h2></div><div class="yellow-wrapper"><h3>Are you 21 years old or older?</h3><table width="200" border="0" cellspacing="20" cellpadding="0" class="birthday"><tr><td width="50%" align="center" valign="middle"><input type="submit" id="over21_yes" name="over21_yes" value="YES" style="width:80px;cursor:pointer;" class="btn"></td><td width="50%" align="center" valign="middle"><input type="submit" id="over21_no" name="over21_no" value="NO" style="width:80px;cursor:pointer;" class="btn"></td></tr></table></div></div></div>');


$(function() {
	//$.cookie('over21','yes',{ expires: -1, path: '/', domain: 'laurelwoodbrewpub.com'});
	if (
		(!$.cookie('over21'))&&
		(!location.href.match(/under-age-21/))
	)	{
		var w=$(window).width();
		var h=$(window).height();
		var dh=$(document).height();
		var left=(w/2)-($('#21check').width()/2);
		var top=(h/2)-($('#21check').height()/2);
		$('#modalback').css({'width':w,'height':dh}).show();
		$('#21check').css({'left':left,'top':top}).slideDown('slow');

		$('#over21_yes').click(function() {
					$.cookie('over21','yes',{ expires: 90, path: '/', domain: 'laurelwoodbrewpub.com'});
					//location='http://www.laurelwoodbrewpub.com/';
					$('#modalback').hide();
					$('#21check').fadeOut();
		});

		$('#over21_no').click(function() {
			location='http://www.laurelwoodbrewpub.com/under-age-21/';
		});
	}
});

jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};
</SCRIPT>
<!-- END CHECK 21 -->


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

<div id="pagewrap">

<div id="page">

	<div id="header">

        <div id="logo">
            <h1>
            	<a href="<?php bloginfo('url'); ?>" title="Welcome to Laurelwood Public House & Brewery. Find some of the best handcrafted beers on tap in Portland, Oregon.">
            		<img src="<?php bloginfo('template_directory'); ?>/images/logo-trans.png" title="Welcome to Laurelwood Public House & Brewery. Find some of the best handcrafted beers on tap in Portland, Oregon." alt="Welcome to Laurelwood Public House & Brewery. Find some of the best handcrafted beers on tap in Portland, Oregon." />
                </a>
            </h1>
			<div class="social-media">
<a href="https://instagram.com/laurelwoodbrewingco" target="_blank" title="Follow Laurelwood Brewery Instagram Feed"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Follow Laurelwood Brewery Instagram Feed" title="Follow Laurelwood Brewery Twitter @laurelwood1" /></a>
<a href="https://twitter.com/#!/laurelwood1" target="_blank" title="Follow Laurelwood Brewery Twitter @laurelwood1"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Follow Laurelwood Brewery Twitter @laurelwood1" title="Follow Laurelwood Brewery Twitter @laurelwood1" /></a>
<a href="http://www.facebook.com/laurelwoodbrewpub" title="Check out some of Portland's best beer at Laurelwood Brewery Facebook page" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Check out some of Portland's best beer at Laurelwood Brewery Facebook page" title="Check out some of Portland's best beer at Laurelwood Brewery Facebook page" /></a>
<a href="http://pinterest.com/laurelwoodbrew/" target="_blank" title="Look at the fun times at Laurelwood Brewery Pinterest"><img src="<?php bloginfo('template_directory'); ?>/images/pinterest.png" title="Look at the fun times at Laurelwood Brewery Pinterest" alt="Look at the fun times at Laurelwood Brewery Pinterest" /></a>
<a href="http://www.youtube.com/user/laurelwoodbrewingco" target="_blank" title="View fun and entertaining video of our brewery on YouTube"><img src="<?php bloginfo('template_directory'); ?>/images/you-tube.png" alt="View fun and entertaining video of our brewery on YouTube" title="View fun and entertaining video of our brewery on YouTube" /></a>
                       </div>
        </div>

		<div id="nav1">
			<ul>
				<?php woo_show_pagemenu( get_option('woo_menupages') ); ?>
				<li><a href="<?php bloginfo('url'); ?>/shop/" style="padding-right:8px;">Shop</a>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/shop/cart/">Cart</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/tag/short+sleeved/">Shirts</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/category/hats/">Hats</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/category/accessories/">Accessories</a></li>
						<li><a href="<?php bloginfo('url'); ?>/shop/wallpaper/">Wallpaper</a></li>
					</ul>
				</li>
				<?php if ( get_option('woo_addblog') ) { ?><li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); echo get_option('woo_blogcat'); ?>" title="Blog"><span>News &amp; Events</span></a>
				<ul>
					<li><a href="<?php echo get_option('home'); echo get_option('woo_blogcat'); ?>">Blog</a></li>
					<li><a href="<?php bloginfo('url'); ?>/monday-night-bicycle-race-series/">Monday Night Bicycle Race Series</a></li>
					</ul>
			</li><?php } ?>
			</ul>
		</div>
		<!--/nav1-->


        <div style="position:absolute;top:125px;left:266px;"><h2 class="orangetagline">The place where friends and family meet</h2></div>
		<a href="http://laurelwoodbrewpub.com/about/join-our-newsletter/"><img src="http://laurelwoodbrewpub.com/wp-content/themes/laurelwood/images/newsletter-img.png" alt="Join Our Newsletter" style="position:absolute; right:0; top:115px;" /></a>
	</div>
	<!--/header -->
