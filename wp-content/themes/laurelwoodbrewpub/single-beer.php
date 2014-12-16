<?php
/*
Template Name: Single Beer Page
*/
?>
<?php get_header(); ?>

<?php global $laurelwoodbrewpub_shortname; ?>
<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
    <div class="bread-title-holder">
        <div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
        <div class="container">
            <div class="row-fluid">
                <div class="container_inner clearfix">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <?php if ((class_exists('laurelwoodbrewpub_breadcrumb_class'))) {$laurelwoodbrewpub_breadcumb->custom_breadcrumb();} ?>
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
                    
                                    <div class="span8">
                                        <div class="beer-info">
                                        <?php the_content(); ?>
                                        <?php global $post; ?>
                                        <h3 id="h_beerstats"><span class="disappear">Beer Stats</span></h3>
                                        <ul class="beerstats">
                                            <li><strong>Alcohol Content:</strong> <?php echo(get_post_meta($post->ID, 'alcoholcontent', true)); ?></li>
                                            <li><strong>IBUs:</strong> <?php echo(get_post_meta($post->ID, 'ibus', true)); ?></li>
                                            <li><strong>Original Gravity:</strong> <?php echo(get_post_meta($post->ID, 'originalgravity', true)); ?></li>
                                            <li><strong>Terminal Gravity:</strong> <?php echo(get_post_meta($post->ID, 'terminalgravity', true)); ?></li>
                                            <li><strong>Malt:</strong> <?php echo(get_post_meta($post->ID, 'malt', true)); ?></li>
                                            <li><strong>Hops:</strong> <?php echo(get_post_meta($post->ID, 'hops', true)); ?></li>          
                                        </ul>
                                        </div>
                                    </div>

                                    <div class="span4">
                                        <div class="beer-info">
                                        <?php the_post_thumbnail('full'); ?>
                                        </div>
                                    </div>

                                </div> 
                                
                            </div>
                        <!-- post -->
                        <?php endwhile; ?>
                        <?php else :  ?>

                        <div class="post">
                            <h2><?php _e('Post Does Not Exist','laurelwoodbrewpub'); ?></h2>
                        </div>
                        <?php endif; ?>
                    </div><!-- content --> 
                </div><!-- container --> 

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>