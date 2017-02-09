<?php
/**
Template Name: Шаблон страницы о нас
 */
?>
<?php
    get_header();
    the_post();
?>
<!--=============== wrapper ===============-->
<div id="wrapper">
    <!--=============== content-holder ===============-->
    <div class="content-holder elem scale-bg2 transition3">
        <!-- Page title -->
            <div class="dynamic-title"><?php the_title(); ?></div>
        <!-- Page title  end--> 
        <?php get_template_part('menu'); ?>
        <!--  Content -->
        <div class="content full-height">
            <!--  fixed-column -->
            <div class="fixed-column">
                <div class="bg" style="background-image:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full') ?>)" ></div>
            </div>
            <!--  fixed-column end-->
            <!--  wrapper-inner -->
            <div class="wrapper-inner">
                <!--  align-content -->
                <div class="align-content">
                    <section>
                        <div class="container small-container">
                            <h3 class="dec-text"><?php the_title(); ?></h3>
                            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> -->
                            <?php the_content(); ?>
                            <a href="<?php echo get_permalink(24); ?>" class="ajax btn anim-button   trans-btn   transition  fl-l" target="_blank"><span>Наши работы</span><i class="fa fa-eye"></i></a>
                        </div>
                    </section>
                </div>
                <!--  align-content end-->
            </div>
            <!--  wrapper-inner end-->
            <!--  Content  end --> 
        </div>
        <?php get_template_part('share'); ?> 
    </div>
    <!-- Content holder  end -->
</div>
<!-- wrapper end -->
<?php
    get_footer();
?>