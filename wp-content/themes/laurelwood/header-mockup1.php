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
<!--Header Test 2-->
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

<!-- BEGIN CHECK 21 -->
<SCRIPT TYPE="text/javascript">
document.write('<div id="modalback" style="position:absolute;top:0px;left:0px;display:none; -moz-opacity:.50; filter:alpha(opacity=50); opacity:.50;z-index:999998;width:100%;height:100%;background-color:#000"></div><div id="21check" style="z-index:999999;display:none;position:absolute;margin-left:40;top:20px"><div class="popup"><div class="big-image"><img src="/wp-content/themes/laurelwood/images/laurel-agegate.jpg" alt="" /></div><div class="tagline"><h2>Laurelwood Brewing Co. requires you to be 21 years old or older to enter this site.</h2></div><div class="yellow-wrapper"><h3>Please enter your birthdate below.</h3><table width="221" border="0" cellspacing="0" cellpadding="0" class="birthday"><tr><td width="59" align="center" valign="middle" class="day"><strong>Month</strong></td><td width="71" align="center" valign="middle"class="day"><strong>Day</strong></td><td width="91" align="center" valign="middle"class="day"><strong>Year</strong></td></tr><tr><td valign="middle" align="left"><input type="text" name="month1" id="month1" class="input-1" /></td><td valign="middle" align="left"><input type="text" name="day1" id="day1" class="input-1" /></td><td valign="middle" align="left"><input type="text" name="year1" id="year1" class="input-2" /></td></tr><tr><td align="center" valign="middle" colspan="3"><input type="submit" id="bday_submit" name="bday_submit" value="" class="enter-btn" /><input type="submit" id="bday_exit" name="" value="" class="exit-btn" /></td></tr></table></div></div></div>');

/*$(function() {
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
		
		$('#over21').click(function() {
			$.cookie('over21','yes',{ expires: 7, path: '/', domain: 'laurelwoodbrewpub.com'});
			$('#modalback').hide();
			$('#21check').slideUp('slow');
		});

		$('#under21').click(function() {
			location='http://www.laurelwoodbrewpub.com/under-age-21/';
		});
	}
});*/

$(function() {
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
		
		$('#bday_submit').click(function() {
				var mm1=$('#month1').val();
				var dd1=$('#day1').val();
				var yy1=$('#year1').val();
				if(mm1=='' || dd1=='' ||yy1==''){
					location='http://www.laurelwoodbrewpub.com/under-age-21/';
				}else{
				var dob = mm1+'/'+dd1+'/'+yy1;
				//alert(dob);
				var today = new Date();
				var dd = today.getDate();
				var mm = today.getMonth()+1;//January is 0!
				var yyyy = today.getFullYear();
				if(dd<10){
					dd='0'+dd;
				} 
				if(mm<10){
					mm='0'+mm;
				}
				var today = mm+'/'+dd+'/'+yyyy;
				var diff = date_diff(dob,today);
				if(diff>=7670){
					$.cookie('over21','yes',{ expires: 7, path: '/', domain: 'laurelwoodbrewpub.com'});
					location='http://www.laurelwoodbrewpub.com/';
					//$('#modalback').hide();
					//$('#21check').slideUp('slow');
				}else{
					location='http://www.laurelwoodbrewpub.com/under-age-21/';
				}
				}		
		});

		$('#bday_exit').click(function() {
			location='http://www.laurelwoodbrewpub.com/under-age-21/';
		});
	}
});

function date_diff(dt1,dt2){
		var t1=dt1;
        var t2=dt2;
		var one_day=1000*60*60*24; 
        var x=t1.split("/");     
        var y=t2.split("/");
        var date1=new Date(x[2],(x[0]-1),x[1]);
        var date2=new Date(y[2],(y[0]-1),y[1]);
		_Diff=Math.ceil((date2.getTime()-date1.getTime())/(one_day));     //Calculate difference between the two dates returns positive if t1<t2 else returns negative
		
		return _Diff;

}

/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * Create a cookie with the given name and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String name The name of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given name.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String name The name of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
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

<div id="pagewrap-mockup1">
  
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

		<div id="nav1">
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
	
	
        <div style="position:absolute;top:137px;left:234px;font-family: 'Satisfy', cursive;"><h2 style="color:#008061;">The place where friends and family meet</h2></div>
		<a href="<?php bloginfo('url'); ?>/about/join-our-newsletter/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/newsletter-mc1.png" alt="Join Our Newsletter" style="float:right; padding-top:24px;" /></a>
	</div>
	<!--/header -->
    