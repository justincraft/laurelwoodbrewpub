<?php
/*
Template Name: QR Landing Page
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" id="meta-title" content="">
    <meta name="description" id="meta-description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="/wp-content/themes/laurelwood/qrlanding/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp-content/themes/laurelwood/qrlanding/css/bootstrap-responsive.min.css" rel="stylesheet">
        
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/wp-content/themes/laurelwood/qrlanding/css/laurelwoodqr.css" type="text/css" />

  </head>

  <body>

  <img alt="full screen background image" src="/wp-content/themes/laurelwood/qrlanding/img/metal-kegs.jpg" id="background-image" />
  
  <!-- Part 1: Wrap all page content here -->
  <div id="wrap" >

  <!-- Begin page content -->
  <div class="container">

    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
    
    <div id="post-<?php the_ID(); ?>" class="post">

        <div class="entry">                                                       
            <?php the_content(); ?>
        </div>
                                                
    </div>
    <!--/post-->

    <?php endwhile; else : ?>

    <div class="post box">
        <div class="entry-head"><h2>404 - Not Found</h2></div>
        <div class="entry-content"><p>The page you are looking for is not here.</p></div>
    </div>

    <?php endif; ?>
    <div class="fix"></div>

  </div>
  
  <script src="/wp-content/themes/laurelwood/qrlanding/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

    });
  </script>

    <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <div class="row-fluid">
          <div class="offset2 span8" style="text-align:left; padding-top: 10px;">
            <p class="copyright">&copy; 2013 Laurelwood Brewing Co.</p>
          </div>
        </div>
      </div>
    </div>

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

</body>
</html>