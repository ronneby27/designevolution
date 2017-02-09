<?php
/**
Template Name: О Нас - Сервис
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
                    <div class="content">
                        <section>
                            <!--  container -->
                            <div class="container">
                                <!--  services-holder -->
                                <div class="services-holder">
                                    <?php 
                                        $children = new WP_Query( array(
                                            'post_parent' => get_the_ID(),
                                            'post_type' => 'page',
                                            'orderby' => 'menu_order',
                                            'order' => 'ASC'
                                        ));  
                                        $i = 1;                                   
                                        while ( $children->have_posts() ) :
                                                    $children->the_post();
                                    ?>
                                    <!-- services-item -->
                                    <div class="services-item">
                                        <div class="serv-img <?php echo ($i % 2)?'lft-img':'rft-img'; ?>">
                                            <div class="bg" style="background-image:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'large') ?>)"></div>
                                        </div>
                                        <div class="services-box-info <?php echo ($i % 2)?'rft-info':'lft-info'; ?>">
                                            <h4><?php the_title(); ?></h4>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <!-- services-item  end-->
                                    <?php 
                                        $i++;
                                        endwhile;
                                    ?>
                                   
                                </div>
                                <!-- services-holder  end-->
                            </div>
                            <!-- Container-->
                        </section>
                    </div>
                    <!--  Content  end --> 
                    <?php get_template_part('share'); ?> 
                </div>
                <!-- Content holder  end -->
            </div>
            <!-- wrapper end -->
<?php
    get_footer();
?>