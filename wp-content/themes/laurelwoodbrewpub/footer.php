<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
global $laurelwoodbrewpub_shortname;
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
				<div class="copyright span12"> <?php if(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_copyright")){ echo stripslashes(laurelwoodbrewpub_get_option($laurelwoodbrewpub_shortname."_copyright")); } else { echo 'Copyright Text';} ?> </div>
				<!-- <div class="owner span6 alpha omega"><?php _e('LWBP Theme by','laurelwoodbrewpub'); ?> <a href="<?php echo $sktURL; ?>" ><?php _e('SketchThemes','laurelwoodbrewpub'); ?></a></div> -->
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
                <!-- <div id="closeTaplist" class="switchLocation">Close Taplist</div> -->
                <!-- <div id="location-bg" class="switchLocation" data-location="bg">Laurelwood Battle Ground, WA</div> -->
        </div>

    <?php } ?>
</div>

<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(document).ready(function() {
      getTapList("ne");
      //$("#beerswitcher").tabs();
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
    $('#closeTaplist').click( function() {
      $('#currentTaplist').slideUp();
      $('#showTaplist').html("What's On Tap &#9660;");
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