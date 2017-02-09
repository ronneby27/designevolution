<?php
    get_header();
?>
<!--=============== wrapper ===============-->
<div id="wrapper">
    <!--=============== content-holder ===============-->
    <div class="content-holder elem scale-bg2 transition3">
        <!-- Page title -->
            <div class="dynamic-title"><?php echo get_cat_name(get_query_var('cat')); ?></div>
        <!-- Page title  end--> 
        <?php get_template_part('menu'); ?> 
        <!--  Content -->
        <div class="content">
            <!--  blog-inner -->
            <div class="blog-inner">
                <!--  gallery-items  -->
                <div class="gallery-items    hid-port-info grid-small-pad">
                    <?php 
                        $article = new WP_Query( array(
                            'cat' => get_query_var('cat'),
                            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 )
                        ));
                        while ( $article->have_posts() ) :
                                    $article->the_post();
                     ?>
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <article>
                                <?php /*
                                <ul class="blog-title">
                                    <li><a href="#" class="tag">12 april  2015</a></li>
                                    <li> - </li>
                                    <li><a href="#" class="tag">Architecture</a></li>
                                </ul>
                                */?>
                                <div class="blog-media">
                                    <img  src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'portfolio-thumb') ?>"   alt="">
                                </div>
                                <div class="blog-text">
                                    <p class="h3"><?php the_title(); ?></p>
                                    <?php the_content(''); ?>
                                    <a href="<?php echo get_permalink(); ?>" class="ajax btn anim-button   trans-btn   transition  fl-l"><span>Читать</span><i class="fa fa-eye"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    ?>
                    
                </div>
                <!-- end gallery items -->
                <?php wp_pagenavi(); ?>
                <?php /*
                <!-- pagination   -->
                <div class="pagination-blog">
                    <div class="pagination-blog-inner">
                        <a href="#" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                        <a href="#" class="blog-page transition">1</a>
                        <a href="#" class="blog-page current-page transition">2</a>
                        <a href="#" class="blog-page transition">3</a>
                        <a href="#" class="blog-page transition">4</a>
                        <a href="#" class="nextposts-link transition"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!--  pagination end -->
                */?>
            </div>
            <!--  blog-inner end -->
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