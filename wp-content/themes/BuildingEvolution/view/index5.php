<?php
/**
Template Name: Шаблон главной страницы
 */
?>
<?php
    get_header();
    the_post();
?>
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
                    <div class="bg" style="background-image:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full') ?>)"></div>
                </div>
                <!--media-container end -->
                <div class="overlay"></div>
                <!-- enter-wrap -->
                <div class="enter-wrap-holder">
                    <div class="enter-wrap">
                        <?php the_content(); ?>
                        <a href="<?php echo get_permalink(24); ?>" class="ajax btn anim-button   trans-btn   transition  fl-l"><span>Войти</span><i class="fa fa-long-arrow-right"></i></a>
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
    get_footer();
?>