<?php
/**
    Template Name: Все проекти
 */
?>
<?php
    get_header();
?>
<!--=============== wrapper ===============-->	
<div id="wrapper">
    <!--=============== content-holder ===============-->
    <div class="content-holder elem scale-bg2 transition3">
        <!-- Page title -->
            <div class="dynamic-title"><?php the_title(); ?></div>
        <!-- Page title  end--> 
        <?php get_template_part('menu'); ?>  
        <!--  Content  --> 
        <div class="content ">
            <section class="no-padding no-border">
                <!-- Filters-->
                <div class="filter-holder filter-nvis-column">
                    <?php /*
                    <!-- <div class="close-share visover"></div> -->
                    */?>
                    <div class="gallery-filters at">
                        <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">Все</a>		
                        <a href="#" class="gallery-filter" data-filter=".arhitektura">Архитектура</a>
                        <a href="#" class="gallery-filter" data-filter=".apartments">Интерьер</a>
<a href="#" class="gallery-filter" data-filter=".commercial">Коммерческий</a>
<a href="#" class="gallery-filter" data-filter=".uncommercial">Некоммерческий</a>
                    </div>
                </div>
                <!-- filters end -->
                <!--  filter-button-->
                <div class="filter-button vis-fc">Фильтр</div>
                <!--  filter-button end -->
                <!--  gallery-items -->
                <div class="gallery-items   hid-port-info">
                    <?php 
                        $article = new WP_Query( array(
                            'post_parent' => get_the_ID(),
                            'post_type' => "page",
                            'orderby' => "menu_order",
                            "order" => "ASC",
                            "posts_per_page" => 100
                            //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 )
                        ));
                        $coute = 4;
                        while ( $article->have_posts() ) :
                            $article->the_post();
                    ?>
                    <!-- 1 -->
                    <div class="gallery-item <?php $filter_val = get_post_meta(get_the_ID(), 'Значения фильтра'); echo array_shift($filter_val); ?> <?php echo ($coute == 8)?'gallery-item-second':''; ?>">
                        <div class="grid-item-holder">
                            <div class="box-item">
                                <div class="wh-info-box">
                                    <div class="wh-info-box-inner at">
                                        <?php $part_string  = explode('<!---->', get_the_title()); ?>
                                        <?php /*
                                        <!-- <a href="<?php echo get_permalink(); ?>" class="ajax">
                                        <?php the_title(); ?>                                                
                                        </a> -->
                                        */?>
                                        <a href="<?php echo get_permalink(); ?>" class="ajax">
                                            <?php echo (!empty($part_string[0]))?$part_string[0]:''; ?>
                                        </a>
                                        <span class="folio-cat"><?php echo (!empty($part_string[1]))?$part_string[1]:''; ?></span>
                                        <?php 
                                        /*    $sub_cat = get_post_meta(get_the_ID(), 'Категория');
                                            if(!empty($sub_cat)){ 
                                        ?>

                                            <span class="folio-cat"><?php echo array_shift($sub_cat); ?></span>
                                        <?php } */?>
                                    </div>
                                </div>
                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), ($coute == 8)?'portfolio-thumb-2x':'portfolio-thumb') ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- 1 end -->
                    <?php 
                        if($coute == 10){
                            $coute = 0;
                        } else {
                            $coute ++;
                        }
                        endwhile;
                    ?>
                </div>
                <!-- end gallery items -->					
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