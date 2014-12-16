<?php
/*
Template Name: Current Tap List
*/
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Current Tap List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laurelwood Brewpub Current Tap List">
    <meta name="author" content="Laurelwood Brewpub">

    <!-- CSS -->
    <link href="/wp-content/themes/laurelwood/taplist.css" rel="stylesheet">

  </head>

  <body>

      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>

          <h2><?php the_title(); ?></h2>
                                                   
          <?php the_content(); ?>
  
      <?php endwhile; else : ?>


      <?php endif; ?>

  </body>
</html>