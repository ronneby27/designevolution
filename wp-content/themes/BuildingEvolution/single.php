<?php
    get_header();
    the_post();
    $th_id = get_post_thumbnail_id();
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
                        <section class="no-bg box-page">
                            <!--  container -->
                            <div class="container">
                                <article class="sinnle-post">
                                    <p><?php the_title(); ?></p>
                                    <?php /*
                                    <ul class="blog-title">
                                        <li><a href="#" class="tag">12 may 2013</a></li>
                                        <li> - </li>
                                        <li><a href="#" class="tag">Interviews </a></li>
                                    </ul>
                                    */?>
                                    <!--  blog-media  --> 
                                    <div class="blog-media">
                                        <div class="custom-slider-holder">
                                            <?php if(count(get_attached_media('image')) > 0){ ?>
                                                <div class="customNavigation">
                                                    <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                                    <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                                </div>
                                            <?php } ?>
                                            <div class="<?php echo (count(get_attached_media('image')) > 0)?'custom-slider owl-carousel':''; ?>">
                                                <?php if(!empty($th_id)){ ?>
                                                    <div class="item">
                                                        <img src="<?php echo wp_get_attachment_image_url($th_id, 'full') ?>" class="respimg" alt="">
                                                    </div>
                                                <?php } ?>
                                                <?php foreach (get_attached_media('image') as $slide) { ?>
                                                    <div class="item">
                                                        <img src="<?php echo $slide->guid; ?>" class="respimg" alt="">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  blog-media  end--> 
                                    <!--  blog-text  --> 
                                    <div class="blog-text">
                                        <?php the_content(); ?>
                                    </div>
                                    <!--  blog-text end -->
                                   

                                </article>
                                <!--  content navigation -->
                                <div class="content-nav single-nav">
                                    <ul>
                                        <li>
                                        <?php 
                                            $next = get_next_post(true);
                                            if(!empty($next)){
                                            $categotry_next = get_the_category($next->ID);
                                            if(array_shift($categotry_next)->cat_ID == 3){ 
                                        ?>
                                            <a href="<?php echo get_permalink(get_next_post()->ID); ?>" class="ajax ln"><i class="fa fa fa-angle-left"></i></a>
                                        <?php } else { ?>
                                            &nbsp;
                                        <?php } } else { ?>
                                            &nbsp;
                                        <?php } ?>

                                        </li>
                                        <li>
                                            <div class="list">
                                                <a href="<?php echo get_category_link(3); ?>" class="ajax">							
                                                <span>
                                                <i class="b1 c1"></i><i class="b1 c2"></i><i class="b1 c3"></i>
                                                <i class="b2 c1"></i><i class="b2 c2"></i><i class="b2 c3"></i>
                                                <i class="b3 c1"></i><i class="b3 c2"></i><i class="b3 c3"></i>
                                                </span></a>
                                            </div>
                                        </li>
                                        <li>
                                        <?php 
                                            $prev = get_previous_post(true);
                                            if(!empty($prev)){
                                                $categotry_prev = get_the_category($prev->ID);
                                                if(array_shift($categotry_prev)->cat_ID == 3){ 
                                        ?>
                                            <a href="<?php echo get_permalink(get_previous_post()->ID); ?>" class="ajax rn"><i class="fa fa fa-angle-right"></i></a>
                                        <?php } else { ?>
                                            &nbsp;
                                        <?php } } else { ?>
                                            &nbsp;
                                        <?php } ?>
                                        </li>
                                    </ul>
                                </div>
                                <!--  content navigation end-->
                            </div>
                            <!--  container end -->
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