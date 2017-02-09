<?php
/**
Template Name: Шаблон страницы проекти
 */
?>
<?php
    get_header();
    the_post();
    $th_id = get_post_thumbnail_id();
?>
<!DOCTYPE HTML>
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder elem scale-bg2 transition3">
                    <!-- Page title -->
                        <div class="dynamic-title" data-title="<?php echo str_replace('<!---->', '',get_the_title()); ?>"><?php echo str_replace('<!---->', '',get_the_title()); ?></div>
                    <!-- Page title  end--> 
                    <?php get_template_part('menu'); ?>
                    <!--  Content -->
                    <div class="content full-height no-padding">
                        <!--  show-hid-content -->
                        <div class="show-hid-content ishid">Описание <i class="fa fa-long-arrow-down"></i></div>
                        <!--  show-hid-content end-->
                        <!--  fixed-info-container-->
                        <div class="fixed-info-container hidden-column">
                            <div class="content-nav">
                                <ul>
                                    <li>
                                        <?php 
                                            $next = get_next_post();
                                            if(!empty($next) && $next->post_parent == 24){ 
                                        ?>
                                        <a href="<?php echo get_permalink($next->ID); ?>" class="ajax ln"><i class="fa fa fa-angle-left"></i></a>
                                        <?php } else { ?>
                                            &nbsp;
                                        <?php } ?>
                                    </li>
                                    <li>
                                        <div class="list">
                                            <a href="<?php echo get_permalink(24); ?>" class="ajax">							
                                            <span>
                                            <i class="b1 c1"></i><i class="b1 c2"></i><i class="b1 c3"></i>
                                            <i class="b2 c1"></i><i class="b2 c2"></i><i class="b2 c3"></i>
                                            <i class="b3 c1"></i><i class="b3 c2"></i><i class="b3 c3"></i>
                                            </span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <?php 
                                            $prev = get_previous_post();
                                            if(!empty($prev) && $prev->post_parent == 24){ 
                                        ?>
                                        <a href="<?php echo get_permalink($prev->ID); ?>" class="ajax rn"><i class="fa fa fa-angle-right"></i></a>
                                        <?php } else { ?>
                                            &nbsp;
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                            <h1><?php the_title(); ?></h1>
                            <div class="separator"></div>
                            <div class="clearfix"></div>
                            <?php the_content(); ?>
                            <?php /*  
                            <h4>Инфо</h4>
                            */?>
                            <ul class="project-details">
                                <?php 
                                    foreach (get_post_meta(get_the_ID()) as $key => $value) {
                                    if(mb_substr($key[0],0,1,"UTF-8") == "*"){
                                ?>
                                    <li><span><?php echo mb_substr($key, 1) ?> : </span><?php echo $value[0]; ?></li>
                                <?php }} ?>
                            </ul>
                            <a href="<?php echo get_permalink(24); ?>" class=" btn anim-button   trans-btn   transition  fl-l" target="_blank"><span>Другие проекты</span><i class="fa fa-eye"></i></a>
                        </div>
                        <!--  fixed-info-container end--> 
                        <!--  resize-carousel-holder--> 
                        <div class="resize-carousel-holder anim-holder gallery-horizontal-holder">
                            <!--  gallery_horizontal-->
                            <div id="gallery_horizontal" class="<?php echo (count(get_attached_media('image')) > 1)?'gallery_horizontal owl_carousel':'';?>">
                                <?php $atta_image = get_children(array(
                                    'post_parent' => get_the_ID(),
                                    'post_mime_type' => 'image',
                                    'orderby' => 'title',
                                    'order' => 'ASC'
                                )) ?>
                                <?php //var_dump($atta_image); ?>
                                <?php foreach($atta_image as $image){ 
                                    $image_url = wp_get_attachment_image_src($image->ID, 'fullhd');
                                ?>
                                    <div class="horizontal_item">
                                        <div class="zoomimage">
                                            <img src="<?php echo $image_url[0]; ?>" class="intense" alt="">
                                            <i class="fa fa-expand"></i>
                                        </div>
                                        <img src="<?php echo $image_url[0]; ?>" alt="">                            
                                    </div>
                                <?php } ?>
                            </div>
                            <!--  gallery_horizontal end-->
                            <!--  navigation -->
                            <?php if(count(get_attached_media('image')) > 1){ ?>
                                <div class="customNavigation">
                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                </div>
                            <?php } ?>
                            <!--  navigation end-->
                        </div>
                        <!--  resize-carousel-holder end-->
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