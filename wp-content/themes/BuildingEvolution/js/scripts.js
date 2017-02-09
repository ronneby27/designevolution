var b = false, i, c1 = false, c2 = false;


function sec() {
 if (b == false) {
  c1 = $('#myElement').hasClass('active');
  c2 = $('#myElement').hasClass('completely');
  if (c1 == true && c2 == true) {
   $('#count1').animateNumber({ number: 67 }, 1000);
   $('#count2').animateNumber({ number: 29 }, 1000);
   $('#count3').animateNumber({ number: 17041 }, 1000);
   b=true;
   clearInterval(i);
   return false;
  }
 }
}

$(document).ready(function()
{
 i = setInterval(sec, 100);
});


// preload ------------------
$(window).load(function() {
    "use strict";
    $(".loader").fadeOut(500, function() {
        $("#main").animate({
            opacity: "1"
        }, 500);
        contanimshow();
    });
});

$("body").append('<div class="l-line"><span></span></div>');
// all functions ------------------
function initDogma() {
    "use strict";
    if ($(".content").hasClass("home-content")) {
		$("header").animate({
            top: "-62px"
        }, 500);
		$("header , footer").animate({
            bottom: "-50px"
        }, 500);
	}
	else
	{
		$("header").animate({
            top: "0"
        }, 500);
		$("header , footer").animate({
            bottom: "0"
        }, 500);
	}
// magnificPopup ------------------
    $(".image-popup").magnificPopup({
        type: "image",
        closeOnContentClick: false,
        removalDelay: 600,
        mainClass: "my-mfp-slide-bottom",
        image: {
            verticalFit: false
        }
    });
    $(".popup-youtube, .popup-vimeo , .show-map").magnificPopup({
        disableOn: 700,
        type: "iframe",
        removalDelay: 600,
        mainClass: "my-mfp-slide-bottom"
    });
    $(".popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        fixedContentPos: true,
        fixedBgPos: true,
        tLoading: "Loading image #%curr%...",
        removalDelay: 600,
        closeBtnInside: true,
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [ 0, 1 ]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });
// bg video ------------------
    var l = $(".background-video").data("vid");
    var m = $(".background-video").data("mv");
    $(".background-video").YTPlayer({
        fitToBackground: true,
        videoId: l,
        pauseOnScroll: true,
        mute: m,
        callback: function() {
            var a = $(".background-video").data("ytPlayer").player;
        }
    });
// Isotope  ------------------
    $(".hide-column").bind("click", function() {
        $(".not-vis-column").animate({
            right: "-100%"
        }, 500);
    });
    $(".show-info").bind("click", function() {
        $(".not-vis-column").animate({
            right: "0"
        }, 500);
    });
    function n() {
        if ($(".gallery-items").length) {
            var a = $(".gallery-items").isotope({
                singleMode: true,
                columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                transformsEnabled: true,
                transitionDuration: "700ms"
            });
            a.imagesLoaded(function() {
                a.isotope("layout");
            });
            $(".gallery-filters").on("click", "a.gallery-filter", function(b) {
                b.preventDefault();
                var c = $(this).attr("data-filter");
                a.isotope({
                    filter: c
                });
                $(".gallery-filters a.gallery-filter").removeClass("gallery-filter-active");
                $(this).addClass("gallery-filter-active");
                return false;
            });
        }
    }
    n();
    function d() {
        //var a = document.querySelectorAll(".intense");
        //console.log(a);
        //Intense(a);
        //$('.intense').colorbox({rel:'.intense', maxWidth: '95%', maxHeight: "95%", href: $(this).attr('src')});
        $(document).on('click', '.intense', function(){
            $.colorbox({maxWidth: '95%', maxHeight: "95%", href: $(this).attr('src')});
        });
    }
    d();
// Owl carousel ------------------
    var heroslides = $(".hero-slider");
    heroslides.each(function(index) {
        var auttime = eval($(this).data("attime"));
        var rtlt = eval($(this).data("rtlt"));
        $(this).owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: auttime,
            autoplayHoverPause: false,
            autoplaySpeed: 1600,
            rtl: rtlt,
            dots: false
        });
    });
    var sync1 = $(".synh-slider"), sync2 = $(".synh-wrap"), flag = false, duration = 300;
    sync1.owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        items: 1,
        dots: false,
        animateOut: "fadeOut",
        animateIn: "fadeIn"
    }).on("changed.owl.carousel", function(a) {
        if (!flag) {
            flag = true;
            sync2.trigger("to.owl.carousel", [ a.item.index, duration, true ]);
            flag = false;
        }
    });
    sync2.owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        items: 1,
        dots: false,
        smartSpeed: 1200,
        autoHeight: true,
    }).on("changed.owl.carousel", function(a) {
        if (!flag) {
            flag = true;
            sync1.trigger("to.owl.carousel", [ a.item.index, duration, true ]);
            flag = false;
        }
    });
    $(".customNavigation.fhsln a.next-slide").on("click", function() {
        sync2.trigger("next.owl.carousel");
		return false;
    });
    $(".customNavigation.fhsln a.prev-slide").on("click", function() {
        sync2.trigger("prev.owl.carousel");
		return false;
    });
    var whs = $(".full-width-slider");
    whs.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: false,
        smartSpeed: 1200
    });
    $(".full-width-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".full-width-slider-holder").find(whs).trigger("next.owl.carousel");
		return false;
    });
    $(".full-width-slider-holder a.prev-slide").on("click", function() {
        $(this).closest(".full-width-slider-holder").find(whs).trigger("prev.owl.carousel");
		return false;
    });
    whs.on("mousewheel", ".owl-stage", function(a) {
        if (a.deltaY < 0) whs.trigger("next.owl"); else whs.trigger("prev.owl");
        a.preventDefault();
    });
    var csi = $(".custom-slider");
    csi.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: false,
        smartSpeed: 1200
    });
    $(".custom-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".custom-slider-holder").find(csi).trigger("next.owl.carousel");
		return false;
    });
    $(".custom-slider-holder a.prev-slide").on("click", function() {
        $(this).closest(".custom-slider-holder").find(csi).trigger("prev.owl.carousel");
		return false;
    });
    var slsl = $(".slideshow-item");
    slsl.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: false,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        autoplay: true,
        autoplayTimeout: 4e3,
        autoplayHoverPause: false,
        autoplaySpeed: 3600
    });
    var gR = $(".gallery_horizontal"), w = $(window);
    function initGalleryhorizontal() {
        var a = $(window).height(), b = $("header").outerHeight(), c = $("footer").outerHeight(), d = $("#gallery_horizontal");
        d.find("img").css("height", a - b - c);
        if (w.width() > 1036) d.slick({
            centerMode: true,
            slidesToShow: 1,
            arrows: false,
            variableWidth: true
        });
    }
    if (gR.length) {
        initGalleryhorizontal();
        w.on("resize.destroyhorizontal", function() {
            setTimeout(initGalleryhorizontal, 150);
        });
    }
    gR.on("mousewheel", gR, function(a) {
        if(w.width() > 1036){
            if (a.deltaY < 0 ) gR.slick('slickNext'); else gR.slick('slickPrev');
        }
        a.preventDefault();
    });
    $(".resize-carousel-holder a.next-slide").on("click", function() {
        gR.slick('slickNext')
		return false;
    });
    $(".resize-carousel-holder a.prev-slide").on("click", function() {
        gR.slick('slickPrev')
		return false;
    });
// Nice scroll  ------------------
    var b = {
        touchbehavior: true,
        cursoropacitymax: 1,
        cursorborderradius: "0",
        background: "none",
        cursorwidth: "10px",
        cursorborder: "0px",
        cursorcolor: "#fff",
        autohidemode: false,
        bouncescroll: false,
        scrollspeed: 120,
        mousescrollstep: 90,
        grabcursorenabled: false,
        horizrailenabled: true
    };
    $(".nav-inner , .fixed-info-container").niceScroll(b);
    var wn = {
        touchbehavior: true,
        cursoropacitymax: 1,
        cursorborderradius: "0",
        background: "none",
        cursorwidth: "6px",
        cursorborder: "0px",
        cursorcolor: "#ccc",
        autohidemode: true,
        bouncescroll: false,
        scrollspeed: 120,
        mousescrollstep: 90,
        grabcursorenabled: false,
        horizrailenabled: true,
		preservenativescrolling: true,
        cursordragontouch: true,
    };
    $("#wrapper").not('.fullpage').niceScroll(wn);
// Map  ------------------
    $("#map-canvas").gmap3({
        action: "init",
        marker: {
            values: [ {
                latLng: [ 50.4917619,30.3814958 ],
                data: "BUILDING EVOLUTION",
                options: {
                    icon: "/wp-content/themes/BuildingEvolution/images/marker.png"
                }
            } ],
            options: {
                draggable: false
            },
            events: {
                mouseover: function(a, b, c) {
                    var d = $(this).gmap3("get"), e = $(this).gmap3({
                        get: {
                            name: "infowindow"
                        }
                    });
                    if (e) {
                        e.open(d, a);
                        e.setContent(c.data);
                    } else $(this).gmap3({
                        infowindow: {
                            anchor: a,
                            options: {
                                content: c.data
                            }
                        }
                    });
                },
                mouseout: function() {
                    var a = $(this).gmap3({
                        get: {
                            name: "infowindow"
                        }
                    });
                    if (a) a.close();
                }
            }
        },
        map: {
            options: {
                zoom: 14,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                scrollwheel: false,
                streetViewControl: true,
                draggable: true,
                styles: [ {
                    featureType: "landscape",
                    stylers: [ {
                        saturation: -100
                    }, {
                        lightness: 65
                    }, {
                        visibility: "on"
                    } ]
                }, {
                    featureType: "poi",
                    stylers: [ {
                        saturation: -100
                    }, {
                        lightness: 51
                    }, {
                        visibility: "simplified"
                    } ]
                }, {
                    featureType: "road.highway",
                    stylers: [ {
                        saturation: -100
                    }, {
                        visibility: "simplified"
                    } ]
                }, {
                    featureType: "road.arterial",
                    stylers: [ {
                        saturation: -100
                    }, {
                        lightness: 30
                    }, {
                        visibility: "on"
                    } ]
                }, {
                    featureType: "road.local",
                    stylers: [ {
                        saturation: -100
                    }, {
                        lightness: 40
                    }, {
                        visibility: "on"
                    } ]
                }, {
                    featureType: "transit",
                    stylers: [ {
                        saturation: -100
                    }, {
                        visibility: "simplified"
                    } ]
                }, {
                    featureType: "administrative.province",
                    stylers: [ {
                        visibility: "off"
                    } ]
                }, {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [ {
                        visibility: "on"
                    }, {
                        lightness: -25
                    }, {
                        saturation: -100
                    } ]
                }, {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [ {
                        hue: "#ffff00"
                    }, {
                        lightness: -25
                    }, {
                        saturation: -97
                    } ]
                } ]
            }
        }
    });
//  Contact form ------------------
    $("#contactform").submit(function() {
        console.log('test');
        var a = $(this).attr("action");
        $("#message").slideUp(750, function() {
            $("#message").hide();
            $("#submit").attr("disabled", "disabled");
            $.post(a, {
                name: $("#name").val(),
                email: $("#email").val(),
                comments: $("#comments").val()
            }, function(a) {
                // $('.close-contact').trigger('click');
                document.getElementById("message").innerHTML = a;
                $("#message").slideDown("slow");
                $("#submit").removeAttr("disabled");
                if (null != a.match("success")) $("#contactform").slideDown("slow");
            });
        });
        return false;
    });
    $("#contactform input, #contactform textarea").keyup(function() {
        $("#message").slideUp(1500);
    });
    $(".close-contact").on("click", function() {
        $(".contact-form-holder").removeClass("visform");
		return false;
    });
    $(".showform").on("click", function(a) {
        a.preventDefault();
        $(".contact-form-holder").addClass("visform");
		return false;
    });
// header functions +  menu  ------------------
    var cm = $(".nav-button");
    var nh = $(".nav-inner");
    var no = $(".nav-overlay");
    var vo = $(".nav-inner");
    var cs = $(".close-share");
    function showmenu() {
        setTimeout(function() {
            nh.addClass("vismen");
        }, 20);
        cm.addClass("cmenu");
        nh.removeClass("isDown");
        no.addClass("visover");
    }
    function hidemenu() {
        nh.addClass("isDown");
        cm.removeClass("cmenu");
        nh.removeClass("vismen");
        no.removeClass("visover");
    }
    cm.on("click", function() {
		if (nh.hasClass("isDown")) {
			showmenu();
		}
		else {
		hidemenu();
        hideShare();
		}
		return false;
    });
    no.on("click", function() {
        hidemenu();
        hideShare();
		return false;
    });
    cs.on("click", function() {
        hidemenu();
        hideShare();
        return false;
    });
    vo.on("mouseleave", function() {
        hidemenu();
        hideShare();
        return false;
    });
    if(window.screen.width>=768){
        cm.on("mouseover", function() {
        if (nh.hasClass("isDown")) {
            showmenu();
        }
        return false;
        });
    }
	$(".nav-button").attr("onclick","return true");
    $("nav li.subnav ").append('<i class="fa fa-angle-double-down subnavicon"></i>');
    $(".nav-inner nav li").on("mouseenter", function() {
        $(this).find("ul").stop().slideDown();
        $(".nav-inner").addClass("menhov");
    });
    $(".nav-inner nav li").on("mouseleave", function() {
        $(this).find("ul").stop().slideUp();
        $(".nav-inner").removeClass("menhov");
    });
    function hideShare() {
        $(".share-inner").removeClass("visshare");
        $(".show-share").addClass("isShare");
        $(".share-container ").removeClass("vissc");
    }
    function showShare() {
        no.addClass("visover");
        $(".share-inner").addClass("visshare");
        $(".show-share").removeClass("isShare");
        setTimeout(function() {
            $(".share-container ").addClass("vissc");
        }, 400);
    }
    $(".show-share").on("click", function(a) {
        hidemenu();
        showShare();
    });
    function showFilter() {
        $(".filter-button").addClass("filvisb");
        setTimeout(function() {
            $(".filter-nvis-column").addClass("fnc");
        }, 400);
        $(".filter-button").removeClass("vis-fc");
    }
    function hideFilter() {
        $(".filter-nvis-column").removeClass("fnc");
        setTimeout(function() {
            $(".filter-button").removeClass("filvisb");
        }, 400);
        $(".filter-button").addClass("vis-fc");
    }
    $(".filter-button").on("click", function() {
        if ($(this).hasClass("vis-fc")) showFilter(); else hideFilter();
    });
    function showHidDes() {
        $(".show-hid-content").removeClass("ishid");
        $(".hidden-column").animate({
            left: "0",
            opacity: 1
        }, 500);
        $(".anim-holder").animate({
            left: "350px"
        }, 500);
    }
    function hideHidDes() {
        $(".show-hid-content").addClass("ishid");
        $(".hidden-column").animate({
            left: "-350px",
            opacity: 0
        }, 500);
        $(".anim-holder").animate({
            left: "0"
        }, 500);
    }
    function showHidDesMob(){
        $(".show-hid-content").removeClass("ishid");
        $('.fixed-info-container').slideDown(500);
    }
    function hideHidDesMob(){
        $(".show-hid-content").addClass("ishid");
        $('.fixed-info-container').slideUp(500);
    }
    $(".show-hid-content").on("click", function() {
        if($(window).width() > 1035){
            if ($(this).hasClass("ishid")) showHidDes(); else hideHidDes();
        } else {
            if ($(this).hasClass("ishid")) showHidDesMob(); else hideHidDesMob();
        }
    });
// share  ------------------
    var shs = eval($(".share-container").attr("data-share"));
    $(".share-container").share({
        networks: shs
    });
    function ac() {
        $(".slideshow-item .item").css({
            height: $(".slideshow-item ").outerHeight(true)
        });
        $(".share-container").css({
            "margin-left": -$(".share-container").width() / 2 + "px"
        });
        $(".wh-info-box-inner").css({
            "margin-top": -1 * $(".wh-info-box-inner").height() / 2 + "px"
        });
        $(".filter-vis-column .gallery-filters").css({
            "margin-top": -1 * $(".filter-vis-column .gallery-filters").height() / 2 + "px"
        });
        $(".mm").css({
            "padding-top": $("header").outerHeight(true)
        });
        $(".synh-slider .item").css({
            height: $(".synh-slider").outerHeight(true)
        });
        $(".full-width-slider .item").css({
            height: $(".full-width-slider").outerHeight(true)
        });
        $(".synh-wrap").css({
            "margin-top": -1 * $(".synh-wrap").height() / 5 + "px"
        });
        if($('.wrapper-inner').height() > $(".align-content").height()){
            $(".align-content").css({
                "margin-top": -1 * $(".align-content").height() / 2 + "px",
                'top': '50%',
                'position': 'absolute'
            });
        }
        $(".enter-wrap-holder").css({
            "margin-top": -1 * $(".enter-wrap-holder").height() / 2 + "px"
        });
        $(".hero-grid .item").css({
            height: $(".hero-grid").outerHeight(true)
        });
        $(".small-column .item").css({
            height: $(".small-column").outerHeight(true)
        });
        $(".filter-nvis-column .gallery-filters").css({
            "margin-top": -1 * $(".filter-nvis-column .gallery-filters").height() / 2 + "px"
        });
        $('.fixed-info-container').removeAttr('style');
    }
    ac();
    $(window).resize(function() {
        ac();
    });
// Init your functions here ------------------



}

function initvideo() {
    var a = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return a.Android() || a.BlackBerry() || a.iOS() || a.Opera() || a.Windows();
        }
    };
    trueMobile = a.any();
	if (trueMobile) {
		$(".background-video").remove();

	}

}

// show hide content  ------------------
function contanimshow() {
    setTimeout(function() {
    	$(".elem").removeClass("scale-bg2");
    }, 450);
    var a = window.location.href;
    var b = $(".dynamic-title").text();
    var c = $(".dynamic-title").data('title');
    $(".header-title a").attr("href", a);
    $(".header-title a").html(b).attr('title', c);
}

function contanimhide() {
    setTimeout(function() {
        $(".elem").addClass("scale-bg2");
    }, 650);
    $(".show-share").addClass("isShare");
}
// Init core  ------------------
$(function() {
    $.coretemp({
        reloadbox: "#wrapper",
        loadErrorMessage: "<h2>404</h2> <br> page not found.",
        loadErrorBacklinkText: "Back to the last page",
        outDuration: 250,
        inDuration: 150
    });
    readyFunctions();
    $(document).on({
        ksctbCallback: function() {
            readyFunctions();
        }
    });
});
// Init all functions  ------------------
function readyFunctions() {
    initDogma();
    initvideo();
}

$(function(){
    $(document).on('click', '#contact-form form #submit', function(){
        var form = $(this).parents('form');
        var cango=1;
        form.find('input,textarea').removeAttr('style');
        form.find('input,textarea').each(function() {
            if(!$(this).val().length) {
                $(this).css('border-bottom', '1px solid red');
                cango=0;
            }
            if($(this).attr('name') == "phone"){
                r = /^[\s\d+]*$/ ;
                if (!r.test($('[name="phone"]').val())){
                    $(this).css('border-bottom', '1px solid red');
                    cango=0;
                }
            }
        });
        if(cango){
            $.ajax({
                type:'POST',
                url: '/sendmailajax.php',
                data: form.serialize(),
                success: function(data){
                    $('#message').show().text(data);
                    setTimeout(function(){
                        $('#message').fadeOut(500);
                    }, 2500);
                    form.find('input,textarea').each(function(){
                        $(this).val('');
                    });
                    setTimeout(function(){
                        $(".contact-form-holder").removeClass("visform");
                    }, 500)
                }
            });
        }
    });
    $('.filter-holder .close-share').unbind();
    $(document).on('click', '.filter-holder .close-share', function(){
        $('.filter-button').trigger('click');
    });
    $(document).on('mouseleave', '.filter-holder.fnc', function(){
        // console.log('OUT');
        $('.filter-button').trigger('click');
    })
});