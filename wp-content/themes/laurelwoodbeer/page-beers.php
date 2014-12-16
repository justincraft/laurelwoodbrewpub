<?php
/*
Template Name: Beer Switcher
*/
?>
<?php get_header(); ?>

<?php global $foodeez_lite_shortname; ?>
<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <div class="bread-title-holder">
        <div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
        <div class="container">
            <div class="row-fluid">
                <div class="container_inner clearfix">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <?php if ((class_exists('foodeez_lite_breadcrumb_class'))) {$foodeez_lite_breadcumb->custom_breadcrumb();} ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-content">  
        <div class="container post-wrap">
            <div class="row-fluid">
                <div id="container" class="span12">
                    <div id="content">  
                            <div class="post" id="post-<?php the_ID(); ?>">
                            
                                <div class="row">
                    
        
        
        
        <h2><?php $titlefield = get_post_meta($post->ID, 'sectiontitle', true); //echo $titlefield; ?></h2>
        <p><?php $textfield = get_post_meta($post->ID, 'introtext', true); //echo $textfield; ?></p>
    <style>
    #beerlogos { list-style-type: none; }
    #beerlogos li { float: left; height: 120px; }
    #beerinfo { clear: both; }
    </style>
    
<table width="900" border="0" cellpadding="0" cellspacing="0" style="font-family: Times New Roman; font-size: small;">
  <tbody><tr>
    <td width="369"><table width="300" border="0" align="right">
      <tbody><tr>
        <td><strong>Pint:</strong></td>
        <td>$4.25</td>
        <td><strong>Glass:</strong></td>
        <td>$3.25</td>
      </tr>
      <tr>
        <td><strong>Sampler  Tray :</strong></td>
        <td>$10.00</td>
        <td><strong>Pitcher:</strong></td>
        <td>$14.00</td>
      </tr>
      <tr>
        <td height="24" colspan="4" valign="bottom"><strong>BEER TO GO</strong></td>
      </tr>
      <tr>
        <td><strong>Quart:</strong></td>
        <td>$7.50</td>
        <td><strong>Growler:</strong></td>
        <td>$14.00</td>
      </tr>
      <tr>
        <td><strong>Refills</strong></td>
        <td>$5.50</td>
        <td><strong>Refills</strong></td>
        <td>$10.00</td>
      </tr>
    </tbody></table></td>
    <td width="521">
        <table width="487" border="0" align="right">
          <tbody><tr>
            <td width="241"><strong>1/4 Barrel Keg <em>(62 pints)</em></strong></td>
            <td width="162">$69 for Organic </td>
            <td width="165">$67 for Other</td>
          </tr>
          <tr>
            <td><strong>1/2 Barrel Keg <em>(124 pints)</em></strong></td>
            <td>$125 for Organic </td>
            <td>$120 for Other</td>
          </tr>
          <tr>
            <td><strong>3 Gallon Cornelius Refills</strong></td>
            <td>$35 for Organic </td>
            <td>$33 for Conventional</td>
          </tr>
          <tr>
            <td><strong>5 Gallon Cornelius Refills</strong></td>
            <td>$55 for Organic </td>
            <td>$53 for Conventional</td>
          </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
                                
<div id="beerswitcher" class="spacerbeers">

            
                <ul id="beerlogos">
                 <?php
                 $lastposts = get_posts('numberposts=-1&post_type=page&post_parent=193&orderby=menuorder&order=ASC');
                 foreach($lastposts as $post) :
                    setup_postdata($post);
                 ?> 
                 <li>               
                <a href="#post-<?php echo $post->ID; ?>"><img src="<?php echo(get_post_meta($post->ID, 'beerlogo', true)); ?>" alt="<?php the_title(); ?>" /></a></li>
                
             <?php endforeach; ?>
                 </ul>
            
            <div id="beerinfo">            
            
                <?php
                 $lastposts = get_posts('numberposts=-1&post_type=page&post_parent=193&orderby=menuorder&order=ASC');
                 foreach($lastposts as $post) :
                    setup_postdata($post);
                 ?>
                 
                 <div id="post-<?php echo $post->ID; ?>" class="post">
                 
                 <img src="<?php echo(get_post_meta($post->ID, 'beerphoto', true)); ?>" alt="<?php the_title(); ?>" class="beerphoto alignright" />
                 
                 <div class="entry">
                 <h2><?php if(get_post_meta($post->ID,'beernameimage',true)) { 
                                echo '<img src="';
                                echo(get_post_meta($post->ID, 'hops', true));
                                echo '" alt="'.the_title().'" />'; 
                            } else { 
                                the_title(); 
                            } ?>
                 </h2>
                 
                 
                 <?php the_content(); ?>
                 
                 <h3 class="h_beerstats"><span class="disappear">Beer Stats</span></h3>
                <ul class="beerstats">
                    <?php if(get_post_meta($post->ID, 'alcoholcontent', true)) { ?><li><strong>Alcohol Content:</strong> <span><?php echo(get_post_meta($post->ID, 'alcoholcontent', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'ibus', true)) { ?><li><strong>IBUs:</strong> <span><?php echo(get_post_meta($post->ID, 'ibus', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'originalgravity', true)) { ?><li><strong>Original Gravity:</strong> <span><?php echo(get_post_meta($post->ID, 'originalgravity', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'terminalgravity', true)) { ?><li><strong>Terminal Gravity:</strong> <span><?php echo(get_post_meta($post->ID, 'terminalgravity', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'malt', true)) { ?><li><strong>Malt:</strong> <span><?php echo(get_post_meta($post->ID, 'malt', true)); ?></span></li><?php } ?>
                    <?php if(get_post_meta($post->ID, 'hops', true)) { ?><li><strong>Hops:</strong> <span><?php echo(get_post_meta($post->ID, 'hops', true)); ?></span></li>    <?php } ?>      
                </ul>
                <br class="clearer" />
                    </div><!-- END ENTRY -->
                
                </div><!-- END POST -->
          
             <?php endforeach; ?>
                <br class="clearer" />
           </div><!-- END BEERINFO -->

            <div class="fix"></div>
            
            </div><!--/spacer -->

                                </div> 

                                
                            </div>
                        <!-- post -->
                        <?php endwhile; ?>
                        <?php else :  ?>

                        <div class="post">
                            <h2><?php _e('Post Does Not Exist','foodeez-lite'); ?></h2>
                        </div>
                        <?php endif; ?>
                    </div><!-- content --> 
                </div><!-- container --> 

            </div>
        </div>
    </div>
</div>

<div id="columnbotcap"></div>
<?php get_footer(); ?>