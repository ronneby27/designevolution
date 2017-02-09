<?php
	get_header();
?>
<!--=============== wrapper ===============-->	
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder elem scale-bg2   no-padding">
                    <!-- Page title -->
                    <div class="dynamic-title">Home</div>
                    <!-- Page title  end--> 
                    <?php get_template_part('menu'); ?> 
                    <!--  Content -->
                    <div class="content full-height">
                        <!--full-height wrap -->
                        <div class="full-height-wrap">
                            <div class="full-width-slider-holder">
                                <div  class="full-width-slider owl_carousel">
                                    <!-- 1-->
                                    <div class="item">
                                        <div class="bg bg-slider" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bg/1.jpg)"></div>
                                        <div class="overlay"></div>
                                        <!-- enter-wrap -->
                                        <div class="enter-wrap-holder cent-holder wht-bg">
                                            <div class="enter-wrap">
                                                <h1>Penteger Vaculis</h1>
                                                <a href="portfolio-single.html" class="ajax btn anim-button   trans-btn   transition "><span>View project</span><i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- enter-wrap end  -->                                   
                                    </div>
                                    <!-- 1 end -->
                                    <!-- 2 -->
                                    <div class="item">
                                        <div class="bg bg-slider" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bg/10.jpg)"></div>
                                        <div class="overlay"></div>
                                        <!-- enter-wrap -->
                                        <div class="enter-wrap-holder cent-holder wht-bg">
                                            <div class="enter-wrap">
                                                <h1> Vestibulum orci felis</h1>
                                                <a href="portfolio-single.html" class="ajax btn anim-button   trans-btn   transition "><span>View project</span><i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- enter-wrap end  --> 
                                    </div>
                                    <!-- 2 end -->
                                    <!-- 3 -->
                                    <div class="item">
                                        <div class="bg bg-slider" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bg/11.jpg)"></div>
                                        <div class="overlay"></div>
                                        <!-- enter-wrap -->
                                        <div class="enter-wrap-holder cent-holder wht-bg">
                                            <div class="enter-wrap">
                                                <h1>Quis imperdiet </h1>
                                                <a href="portfolio-single.html" class="ajax btn anim-button   trans-btn   transition "><span>View project</span><i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- enter-wrap end  --> 
                                    </div>
                                    <!-- 3 end -->
                                </div>
                                <!--  navigation -->
                                <div class="customNavigation">
                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!--  navigation end-->
                            </div>
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