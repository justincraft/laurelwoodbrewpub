	<?php if ( !is_home() && !is_page() && ( function_exists('dynamic_sidebar') && (is_sidebar_active(2) || is_sidebar_active(3) || is_sidebar_active(4)) ) ) : // Don't show on the front page ?>
    <!-- Bottom Widgets -->
	<div class="box6">
		<div class="top"></div>
		<div class="spacer">
            <div class="col3">
                <?php dynamic_sidebar(2); ?>		           
            </div>
            <!--/col3 -->
            <div class="col3">
                <?php dynamic_sidebar(3);  ?>		           
            </div>
            <!--/col3 -->
            <div class="col3 last">
                <?php dynamic_sidebar(4);  ?>		           
            </div>
            <!--/col3 -->
            <br class="fix" />
		</div>
		<!--/spacer -->
		<div class="bot"></div>
	</div>
	<!--/box6 -->
    <?php endif; ?>
    
</div><!--/page -->

</div><!--/pagewrap -->
	<!-- Footer -->
    	<div id="footerwrap">
	<div id="footer">
    
        <div class="footer-section">
		<div id="footerlogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer.jpg" alt="Laurelwood Brewpub" /></div>
		<div class="footer-nav">
		<ul>
            <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
            <li><a href="<?php echo get_option('home'); ?>/on-tap">On Tap</a></li>
            <li><a href="<?php echo get_option('home'); ?>/locations-menus">Locations &amp; Menus</a></li>
            <li><a href="<?php echo get_option('home'); ?>/category/blog">News &amp; Events</a></li>
            <li><a href="<?php echo get_option('home'); ?>/find">Find Our Beer</a></li>
            <li><a href="<?php echo get_option('home'); ?>/about">About Us</a></li>
            <li><a href="<?php echo get_option('home'); ?>/community">Community</a></li>
            <li><a href="<?php echo get_option('home'); ?>/shop">Shop</a></li>
            <li class="last"><a href="<?php echo get_option('home'); ?>/contact">Contact </a></li>
        </ul>
		</div>
        
        <div id="newsletter">
        	

            <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" method="post">
			
                <div><img src="<?php bloginfo('template_directory'); ?>/images/newsletter-heading.jpg" alt="Sign up for the Brewsletter" /> <input type="hidden" name="username" value="Laurelwood" />
                <input type="hidden" name="notification" value="mdekalb1@gmail.com" />
                <input type="hidden" name="contactemail" value="mdekalb1@gmail.com" />
                <input type="hidden" name="contactname" value="Laurelwood Brewery" />
                
                <input type="text" name="ea" maxlength="120" value="email address" onfocus="if (this.value == 'email address') { this.value='';}" onblur="if (this.value == '') { this.value='email address';}" id="inputemail"  />
                
                <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/bg_footersubmit.jpg" alt="Submit" value="Submit" id="inputsubmit" name="go" />
                
                <input type="hidden" name="llr" value="tiosxufab">
<input type="hidden" name="m" value="1105576147219">
<input type="hidden" name="p" value="oi">
                <input type="hidden" name="thankyou_firstdouble" value="<?php echo get_option('home'); ?>/please-confirm" />
                <input type="hidden" name="thankyou_message" value="<?php echo get_option('home'); ?>/thank-you" />
                </div>
            </form> 
        </div><!-- END NEWSLETTER -->
		</div>
        

        
		<div class="footer-section">
       
		  <div id="copyright">Copyright &copy; <?php echo date('Y'); ?> Laurelwood Public House and Brewery.<br /> All rights reserved. 5115 NE Sandy Blvd, Portland, Oregon - (503) 282-0622</div>
<div class="geo-trust"><!-- GeoTrust QuickSSL [tm] Smart  Icon tag. Do not edit. -->
<SCRIPT LANGUAGE="JavaScript"  TYPE="text/javascript"  
SRC="//smarticon.geotrust.com/si.js"></SCRIPT>
<!-- end  GeoTrust Smart Icon tag --> </div>

<div class="social-media">
  <!-- <img src="<?php bloginfo('template_directory'); ?>/images/footer-follow-us.jpg" alt="follow us" /> -->
  <a href="https://instagram.com/laurelwoodbrewingco" target="_blank" title="Follow Laurelwood Brewery Instagram Feed"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Follow Laurelwood Brewery Instagram Feed" title="Follow Laurelwood Brewery Twitter @laurelwood1" /></a>
  <a href="https://twitter.com/#!/laurelwood1" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" /></a>
  <a href="http://www.facebook.com/laurelwoodbrewpub" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook" /></a>
  <a href="http://pinterest.com/laurelwoodbrew/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/pinterest.png" alt="pinterest" /></a>
  <a href="http://www.youtube.com/user/laurelwoodbrewingco" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/you-tube.png" alt="you tube" /></a>
</div>

</div>
     
</div><!--/footer -->
 	<?php wp_footer(); ?>

</div>	<!--/footerwrap -->

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

<div id="currentTaplist">
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
                <!-- <div id="location-bg" class="switchLocation" data-location="bg">Laurelwood Battle Ground, WA</div> -->
        </div>

    <?php } ?>
</div>

<div id="showTaplist">What's On Tap &#9660;</div>

<script type="text/javascript">
    $(document).ready(function() {
      getTapList("ne");
      $("#beerswitcher").tabs();
      $("div#introbox li.page_item a").text('');
      $("input.addtocart").val('');
      $("a.fancybox").fancybox();
    });
    $('#showTaplist').click( function() {
        if ($('#currentTaplist').is(':hidden')) {
            $('#currentTaplist').slideDown();
            $('#showTaplist').html('Close Tap List &#10006;');
        } else {
            $('#currentTaplist').slideUp();
            $('#showTaplist').html("What's On Tap &#9660;");
        }
    });
    $('.switchLocation').click( function() {
        var loc = $(this).attr('data-location');
        getTapList(loc);
    });

    function getTapList(loc) {
        $.ajax({
       type: "GET",
       url: "/wp-content/themes/laurelwood/ajax.taplist.php",
       data: "loc="+loc,
       success: function(html){
          $('#locationTaplist').empty();
          $('#locationTaplist').append(html);
          $('.switchLocation').removeClass('active');
          $('#location-'+loc).addClass('active');
          var name = $('#location-'+loc).html();
          $('#locationName').html('ON TAP: '+name);
       }
     });
    }
    $(".insta-grid li a").hover(
      function() { $(this).find(".insta-likes, .insta-heart").css("display", "block"); },
      function() { $(this).find(".insta-likes, .insta-heart").css("display", "none"); }
    );

</script>
</body>
</html>