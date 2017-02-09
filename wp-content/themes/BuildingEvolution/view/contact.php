<?php
/**
Template Name: Шаблон страницы контакты
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
            <!--  wrapper-inner  --> 
            <div class="wrapper-inner">
                <!--  align-content  --> 
                <div class="align-content">
                    <section>
                        <div class="container small-container">
                            <h3 class="dec-text"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <a href="#" class=" btn anim-button   trans-btn   transition  fl-l showform"><span>Связь с нами</span><i class="fa fa-eye"></i></a>
                        </div>
                    </section>
                </div>
                <!--  align-content  end--> 
                <!--  contact-form-holder  --> 
                <div class="contact-form-holder">
                    <div class="close-contact">&#10005;</div>
                    <div class="align-content">
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
            <!--  fixed-column -->
            <div class="fixed-column">
                <div class="map-box">
                    <div  id="map-canvas"></div>
                </div>
            </div>
            <!--  fixed-column end-->  
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