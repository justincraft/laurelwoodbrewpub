<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
global $foodeez_lite_shortname;
?>

<div class="footer-top-border"></div>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper">
				<?php dynamic_sidebar( 'Footer Sidebar' ); ?>
				<div class="clearfix"></div>
			</div><!-- second_wrapper -->
		</div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<?php $sktURL = 'http://www.sketchthemes.com/'; ?>
				<div class="copyright span12"> <?php if(foodeez_lite_get_option($foodeez_lite_shortname."_copyright")){ echo stripslashes(foodeez_lite_get_option($foodeez_lite_shortname."_copyright")); } else { echo 'Copyright Text';} ?> </div>
				<!-- <div class="owner span6 alpha omega"><?php _e('Foodeez Theme by','foodeez-lite'); ?> <a href="<?php echo $sktURL; ?>" ><?php _e('SketchThemes','foodeez-lite'); ?></a></div> -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a>
	<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28912981-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- BEGIN CHECK 21 -->
<SCRIPT TYPE="text/javascript">
document.write('<div id="modalback" style="position:absolute;top:0px;left:0px;display:none; -moz-opacity:.50; filter:alpha(opacity=50); opacity:.50;z-index:999998;width:100%;height:100%;background-color:#000"></div><div id="21check" style="z-index:999999;display:none;position:absolute;top:20px"><div class="popup"><div class="big-image"><img src="/wp-content/themes/laurelwood/images/laurel-agegate.jpg" alt="" /></div><div class="tagline"><h2>Laurelwood Brewing Co. requires you to be 21 years old or older to enter this site.</h2></div><div class="yellow-wrapper"><h3>Are you 21 years old or older?</h3><table width="200" border="0" cellspacing="20" cellpadding="0" class="birthday"><tr><td width="50%" align="center" valign="middle"><input type="submit" id="over21_yes" name="over21_yes" value="YES" style="width:80px;cursor:pointer;" class="btn"></td><td width="50%" align="center" valign="middle"><input type="submit" id="over21_no" name="over21_no" value="NO" style="width:80px;cursor:pointer;" class="btn"></td></tr></table></div></div></div>');


$(function() {
  console.log('Age Check');
  $.cookie('over21','yes',{ expires: -1, path: '/', domain: 'www.laurelwoodbrewpub.com'});
  if (
    (!$.cookie('over21'))&&
    (!location.href.match(/under-age-21/))
  ) {
    var w=$(window).width();
    var h=$(window).height();
    var dh=$(document).height();
    var left=(w/2)-($('#21check').width()/2);
    var top=(h/2)-($('#21check').height()/2);
    $('#modalback').css({'width':w,'height':dh}).show();
    $('#21check').css({'left':left,'top':top}).slideDown('slow');

    $('#over21_yes').click(function() {
          $.cookie('over21','yes',{ expires: 90, path: '/', domain: 'laurelwoodbrewpub.com'});
          location='http://www.laurelwoodbrewpub.com/';
          $('#modalback').hide();
          $('#21check').fadeOut();
    });

    $('#over21_no').click(function() {
      location='/under-age-21/';
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

<div id="currentTaplist" class="navbar navbar-fixed-top">
    <?php if ($_REQUEST['manual']) { ?>
        <iframe class="taplist" src="http://laurelwoodbrewpub.com/current-tap-list/" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>
    <?php } else { ?>
        <?php
            switch ($_REQUEST['loc']) {
                case "ne": $loc = "ne"; break;
                case "se": $loc = "se"; break;
                case "bg": $loc = "bg"; break;
                default: $loc = "ne";
            }
        ?>
        <!-- <iframe class="taplist" src="http://laurelwoodbrewpub.com/wp-content/themes/laurelwood/taplist-<?php echo $loc; ?>.php" width="100%" height="100%" scrolling="no" frameborder="0"></iframe> -->
        
        <h3 id="locationName">ON TAP: Laurelwood Public House &amp; Brewery</h3>

        <ul>
            <li class="beer heading">Name</li>
            <li class="abv heading">ABV</li>
            <li class="ibu heading">IBU</li>
        </ul>

        <div id="locationTaplist"></div>

        <div id="chooseLocation">
                <div id="location-ne" class="switchLocation active" data-location="ne">Laurelwood Public House &amp; Brewery</div>
                <div id="location-se" class="switchLocation" data-location="se">Laurelwood SE Public House</div>
                <div id="closeTaplist">&#9650; Close</div>
                <!-- <div id="location-bg" class="switchLocation" data-location="bg">Laurelwood Battle Ground, WA</div> -->
        </div>

    <?php } ?>
</div>

<script type="text/javascript">
    // var $ = jQuery.noConflict();
    jQuery(document).ready(function() {
      getTapList("ne");
      //$("#beerswitcher").tabs();
      jQuery("div#introbox li.page_item a").text('');
      jQuery("input.addtocart").val('');
      jQuery("a.fancybox").fancybox();
    });
    jQuery('#showTaplist').click( function() {
        if (jQuery('#currentTaplist').is(':hidden')) {
            jQuery('#currentTaplist').slideDown();
            jQuery('#showTaplist').html('Close Tap List &#10006;');
        } else {
            jQuery('#currentTaplist').slideUp();
            jQuery('#showTaplist').html("What's On Tap &#9660;");
        }
    });
    jQuery('#closeTaplist').click( function() {
      jQuery('#currentTaplist').slideUp();
      jQuery('#showTaplist').html("What's On Tap &#9660;");
    });
    jQuery('.switchLocation').click( function() {
        var loc = jQuery(this).attr('data-location');
        getTapList(loc);
    });

    function getTapList(loc) {
        jQuery.ajax({
       type: "GET",
       url: "/wp-content/themes/laurelwoodbeer/ajax.taplist.php",
       data: "loc="+loc,
       success: function(html){
          jQuery('#locationTaplist').empty();
          jQuery('#locationTaplist').append(html);
          jQuery('.switchLocation').removeClass('active');
          jQuery('#location-'+loc).addClass('active');
          var name = jQuery('#location-'+loc).html();
          jQuery('#locationName').html('ON TAP: '+name);
       }
     });
    }
    jQuery(".insta-grid li a").hover(
      function() { $(this).find(".insta-likes, .insta-heart").css("display", "block"); },
      function() { $(this).find(".insta-likes, .insta-heart").css("display", "none"); }
    );

</script>

</body>
</html>