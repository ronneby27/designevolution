<?php
/**
Template Name: Шаблон страницы главной с видео
 */
?>
<?php
get_header();
the_post();
?>

<!--=============== wrapper ===============-->		
<div id="wrapper" class="wrapper-main fullpage">
    <!--=============== content-holder ===============-->
    <div class="content-holder elem scale-bg2   no-padding">
        <!-- Nav button-->

        <!-- Nav button end -->
        <!-- Page title -->
        <div class="dynamic-title"><?php the_title(); ?></div>
        <?php get_template_part('menu'); ?> 

        <div id="fullpage">

            <div class="content content-first full-height fullpage-item slide_<?php the_ID()?>">
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
                    <!--<div class="enter-wrap">
                        <h1>DESIGN EVOLUTION<br><span>DESIGN & ARCHITECTURE STUDIO</span></h1>
                    </div>-->
                </div>
                <!-- enter-wrap end  -->
                <button id="moveDown" class="arrow"></button>
            </div>
            <!-- full-height-wrap end  -->  
        </div>
        <div id="myElement" class="content full-height no-padding content-vertical fullpage-item slide_<?php the_ID()?>">

            <div class="full-height-wrap wow table-inner">
                <div class="content__text hide-on-mobile">
                    <div class="content__text--item">
                        <div class="number" id="count1">0</div>
                        проектов
                    </div>
                    <div class="content__text--item">
                        <div class="number" id="count2">0</div>
                        реализовано
                    </div>
                    <div class="content__text--item">
                        <div class="number" id="count3">0</div>
                        площадь м<sup>2</sup>
                    </div>
                </div>
                <div class="content__text hide-on-desktop">
                    <div class="content__text--item">
                        <div class="number">67</div>
                        проектов
                    </div>
                    <div class="content__text--item">
                        <div class="number">29</div>
                        реализовано
                    </div>
                    <div class="content__text--item">
                        <div class="number">17 041</div>
                        площадь м<sup>2</sup>
                    </div>
                </div>   
                <div  class="content__column">
                    <div class="content__column--item left">
                        <h1 class="content__column--item_title">Студия Design Evolution <span> основана в 2012 году и является одним из направлений строительной компании Building Evolution. Сотрудничество направлений – это комплексный взгляд
                            на проекты и главное преимущество среди других дизайн студий. Совместная работа над проектами  позволяет выпускать яркие и качественные дизайн
                            или архитектурные проекты с четким пониманием их реализации в деталях.</span>  </h1>
                        </div>
                        <div class="content__column--item right">
                         <h2 class="content__column--item_title">Студия дизайна интерьера и архитектуры <span>объединяет команду дизайнеров, архитекторов и инженеров.<br>
                            Предоставляем услуги в направлениях:<br>
                            - Архитектурное проектирование<br>
                            - Дизайн интерьера<br>
                            - Инженерные сети<br>
                            - Авторский надзор<br>
                        </span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content full-height no-padding fullpage-item slide_<?php the_ID()?>">
            <div class="slogan-wrapper">
                <div class="content-slogan">
                    <!-- <div class="content-slogan_text">слоган</div> -->
                    <!--  contact-form-holder  --> 
                    <div class="contact-form-holder contact-form-holder-main">
                        <div class="close-contact">
                            &#10005;
                        </div>
                        <div class="align-content align-content_main">
                            <section>
                                <div id="contact-form">
                                    <div id="message"></div>
                                    <form method="post" action="#" name="contactform" id="contactform">
                                        <input name="name" type="text" id="name"  onClick="this.select()" placeholder="Имя" >
                                        <input name="phone" type="text" id="phone" onClick="this.select()" placeholder="Номер телефона" >            
                                        <textarea name="comments"  id="comments" onClick="this.select()" placeholder="Сообщение" ></textarea>  
                                        <button type="submit"  id="submit"><span>Отправить </span> <i class="fa fa-long-arrow-right"></i></button>                                                                                                      
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--  contact-form-holder end -->
                </div>
                <div class="content footer-content">
                    <div class="footer-content_item">
                       Телефоны:<br>(044) 229-09-13<br>(067) 622-27-63<br>(067) 402-44-28
                    </div>
                    <div class="footer-content_item footer-content_item--button">
                        <a href="#" class="button trans-btn   transition  showform"><span>Связь с нами</span></a>
                        <div class="footer-content_social">
                            <a href="https://www.facebook.com/buildingevolution.ua/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a>
                            <a href="https://www.youtube.com/channel/UCheh-MqKwmslRY_IRRDJn5A" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.jpg"></a>
                            <a href="https://plus.google.com/114706011157006921032/videos" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/google.jpg"></a>
                            <a href="https://www.instagram.com/designevolution_ua/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.jpg"></a>
                        </div>
                    </div>
                    <div class="footer-content_item">
                        Адрес:<br>Украина, г. Киев<br>ул. 18-я Садовая, дом 4<br>office@buildingevolution.com.ua
                    </div>
                </div>
            </div>


        </div>

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