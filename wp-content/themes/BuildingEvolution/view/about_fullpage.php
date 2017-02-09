<?php
/**
Template Name: Шаблон страницы о нас - FullPage
 */
?>
<?php
    get_header();
    the_post();
?>
	 <!--=============== wrapper ===============-->	
            <div id="wrapper" class="fullpage">
                <!--=============== content-holder ===============-->
                <div class="content-holder elem scale-bg2 transition3">
                    <!-- Page title -->
                    <div class="dynamic-title"><?php the_title(); ?></div>
                    <!-- Page title  end-->  
                    <?php get_template_part('menu'); ?>
                    <!--  Content -->
                    <div class="content">
                        <div id="fullpage">
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
	                            <div class="fullpage-item slide_<?php the_ID()?>" style="background: url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'fullhd') ?>) no-repeat 50% 50% / cover;">
	                                <div class="fullpage-content">
	                                    <div class="info_block">
                                            <div class="title"><?php the_title(); ?></div>
                                            <div class="text">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
	                                </div>
	                            </div>
                            <?php 
                                endwhile;
                            ?>
						</div>
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