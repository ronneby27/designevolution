<?php
/**
Template Name: 404
 */
?>
<?php
    get_header();
    // the_post();
?>
<?php 
$children = new WP_Query( array(
    'p' => 498,
    'post_type' => 'page'
));
while ( $children->have_posts() ) : $children->the_post();
?>
<style>
	header{
		top: 0 !important;
	}
	.enter-wrap-holder{
		margin-top: 30px !important;
	}
</style>
            <!--=============== wrapper ===============-->		
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder elem scale-bg2   no-padding">
                    <!-- Page title -->
                    <div class="dynamic-title"><?php the_title(); ?></div>
                    <!-- Page title  end--> 
                    <?php get_template_part('menu'); ?>
                    <!--  Content -->
                    <div class="content full-height no-padding home-content ">
                        <!--full-height wrap -->
                        <div class="full-height-wrap">
                            <!--media-container -->
                            <div class="media-container">
                                <div class="video-mask"></div>
                                <!--=============== add you video id  in data-vid="" if you want add sound change data-mv="1" on data-mv="0" ===============-->
                                <div  class="background-video" data-vid="<?php echo get_theme_mod('youtube_id', ''); ?>" data-mv="1"> </div>
                                <div class="bg mob-bg" style="background-image:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full') ?>)"></div>
                            </div>
                            <!--media-container end -->
                            <div class="overlay"></div>
                            <!-- enter-wrap -->
                            <div class="enter-wrap-holder">
                                <div class="enter-wrap">
                                    <h1><?php the_content(); ?></h1>
                                </div>
                            </div>
                            <!-- enter-wrap end  -->
                        </div>
                        <!-- full-height-wrap end  -->  
                    </div>
                    <!-- Content   end -->	 
                    <?php get_template_part('share'); ?> 
                </div>
                <!-- Content holder  end -->
            </div>
            <!-- wrapper end -->
<?php
    endwhile;
    get_footer();
?>