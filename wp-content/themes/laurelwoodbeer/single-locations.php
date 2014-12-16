<?php
/*
Template Name: Locations Child
Laurelwood Beer: Single Location Page
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
                    
                                    <div class="span12">
                                        <div class="beer-info">
                                        <?php the_content(); ?>
                                        <?php global $post; ?>
                                        </div>
                                    </div>

                                    <!-- <div class="span4">
                                        <div class="beer-info">
                                        <?php the_post_thumbnail('full'); ?>
                                        </div>
                                    </div> -->

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
<?php get_footer(); ?>