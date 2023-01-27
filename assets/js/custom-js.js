// custom js SJ

jQuery(document).ready(function() {
    setInterval(() => {
        $(' .speed-test ').addClass('div1');
    }, 2000);


    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});




// Main Slider


(function($) {
    $(window).enllax();


    $('.carousel').carousel({
        interval: 15000,
        pause: "false"
    });

    function doAnimations(elems) {

        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });
        });
    }

    var $myCarousel = $('.carousel'),
        $firstAnimatingElems = $myCarousel.find('.carousel-item:first').find("[data-animation ^= 'animated']");
    $myCarousel.carousel();
    doAnimations($firstAnimatingElems);

    //Pause carousel  
    //$myCarousel.carousel('pause');

    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function(e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

})(jQuery);




/*stickey header*/
jQuery(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 20) {
            $('header').addClass('fixed-header');

        } else {
            $('header').removeClass('fixed-header');
        }
    });

    $(document).ready(function() {
        var toppos = $('header').offset().top;
        if (toppos >= 30) {
            $('header').addClass('fixed-header');
        }
    });



});
$(document).ready(function() {
    $('.navigation .nav li .nav-link').click(function() {
        $(this).siblings('.dropdown_nav').toggleClass('dropdown_hight');
        $(this).parent('.nav-item').siblings('.nav-item').children('.dropdown_nav').removeClass('dropdown_hight');

    });
    $('.hamburger').click(function() {
        $('.dropdown_nav').removeClass('dropdown_hight');
    });
});
// animation
$(document).ready(function() {
    $('.flipper').click(function() {
        $(this).toggleClass('flip');
    });
});

$(document).ready(function() {

    var lastScrollTop = 0;

    $(window).scroll(function() {

        $('.scrollprnt').html($(this).scrollTop());
        var st = $(this).scrollTop();
        var text_p = $('.scrollprnt').text();
        var integer = parseInt(text_p, 10);
        var a = 0;

        // ipad png  and content position change start her

        if (st > 500) {
            b = st - 500;
            bb = st / 650;
            cb = st / 750;
            $('.rotate_img').css("opacity", bb);
            $('.rotate_img').css("transform", `rotateX(${70-b/5}deg)`);
            $('.anim_efrog').css("opacity", cb);
            $('.anim_efrog').css("transform", `translateY(${0+b/5}px)`);
            $('.rotate_content_div').css("transform", `rotateX(${70-b/5}deg)`);

            // console.log(44 - b);
        } else {
            $('.rotate_img').css("transform", `rotateX(${70-b/5}deg)`);
            $('.rotate_content_div').css("transform", `rotateX(${70-b/5}deg)`);
        }
        if (st > 650) {
            d = st - 650;
            ab = st / 650;
            $('.rotate_ul').css("opacity", ab);
            $('.rotate_ul').css("transform", `translateY(-${100-d/5}%)`);

        } else {
            $('.rotate_ul').css("transform", `translateY(-${100-d/5}%)`);
            $('.rotate_ul').css("opacity", ab);
        }
        if (st > 750) {
            c = st - 750;

            $('.industrie .software_services_div').addClass('rotatex_sticky');
            // $('.rotate_ul').css("transform", `translateY(-${100-c/5}%)`);

        } else {

            $('.industrie .software_services_div').removeClass('rotatex_sticky');
            // $('.rotate_ul').css("transform", `translateY(${100+c/5}%)`);
        }
        if (st > 850) {

            $('.industrie .rotate_img').addClass('rotatex_img');
            $('.rotate_content_div').addClass('rotatex_content_div');

        } else {
            $('.industrie .rotate_img').removeClass('rotatex_img');
            $('.rotate_content_div').removeClass('rotatex_content_div');

        }
        if (st > 950) {

            $('.anim_efrog').addClass('animx_efrog');


        } else {

            $('.anim_efrog').removeClass('animx_efrog');

        }
        if (st > 1150) {
            e = st - 1150;
            $('.rotate_ul').css("transform", `translateY(${0+e/5}%)`);

        } else {
            $('.rotate_ul').css("transform", `translateY(-${0-e/5}%)`);
        }

        if (st > 1650) {
            f = st - 1650;
            $('.software_services_div').css("transform", `translateY(${0-f/5}%)`);

        } else {
            $('.software_services_div').css("transform", `translateY(${0-f/5}%)`);
        }
        // book-menu position change start her
        if (integer > 1650) {
            st = st - 1650;

            // ab = st / 300
            // $('.book').css("opacity", ab);
            // $('.book').css("transform", `translate(-${st}px, -${st}px)`);


            // book-menu position change start her

            if (st > 500) {
                $('.book_1').addClass('add-book_1');
                $('.book_2').addClass('add-book_2');
                $('.book_3').addClass('add-book_3');
            } else {
                $('.book_1').removeClass('add-book_1');
                $('.book_2').removeClass('add-book_2');
                $('.book_3').removeClass('add-book_3');
            }
        }
        // main-div addclass
        if (integer > 2000) {
            $('.main-div').css("background-position", `0 -${st}px`);

            if (st > 500) {
                st = st - 500;
                bt = st + 250

                $('.cartoon-man').css("margin-top", ` -${st}px`);
                $('.jims_cart').css("margin-top", ` -${st}px`);
                $('.phone_outside').css("margin-top", ` -${st}px`);
                $('.jims_background').css("margin-top", ` -${st}px`);
                $('.jimspage').css("margin-top", ` -${st}px`);
                $('.book').css("margin-top", ` -${st}px`);
                $('.phonepng').css("margin-top", ` -${st}px`);
                $('.content_main1').css("margin-top", ` -${st}px`);
                $('.content_main1').removeClass('addclassmain1');
                // $('.background_two').css("margin-top", ` -${st}px`);
                $('.main-div2').css("transform", `translateY(-${st}px)`);
            } else {

            }
        }
    });
});
// animation js end here




// Tabs
$(document).ready(function() {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default',
        width: 'auto',
        fit: true,
        closed: 'accordion',
        activate: function(event) {
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
            $("html, body").animate({ scrollTop: $('#horizontalTab').offset().top - 50 }, 500);
        }
    });
});



// Onload Effects

jQuery(document).ready(function() {
    jQuery('.post1').addClass("custom-hide").viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 100
    });
    jQuery('.post2').addClass("custom-hide").viewportChecker({
        classToAdd: 'animated fadeIn',
        offset: 100
    });
    jQuery('.post3').addClass("custom-hide").viewportChecker({
        classToAdd: 'animated fadeInDown',
        offset: 100
    });
    jQuery('.post4').addClass("custom-hide").viewportChecker({
        classToAdd: 'animated zoomIn',
        offset: 100
    });
    jQuery('.post5').addClass("custom-hide").viewportChecker({
        classToAdd: 'animated fadeInLeft',
        offset: 100
    });
    jQuery('.post6').addClass("custom-hide").viewportChecker({
        classToAdd: 'animated fadeInRight',
        offset: 100
    });


    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 2000, function() {
                window.location.hash = hash;
            });
        }
    });

});





// stickey box SJ
jQuery(document).ready(function() {
    jQuery('.resp-tabs-list').scrollToFixed({
        marginTop: jQuery('.header').outerHeight(),
        limit: jQuery('.metholodogy-block').offset().top - jQuery('.resp-tabs-list').outerHeight(),
        zIndex: 999
    });
});


function scrollWin() {
    window.scrollBy(0, 0.1);
}

jQuery(document).ready(function() {
    jQuery("#Name").blur(function() {
        var name = jQuery.trim(jQuery("#Name").val());
        if (name != "") {
            $("#labelName").addClass("onFill");
        } else {
            $("#labelName").removeClass("onFill");
        }
    });

    jQuery("#Name").click(function() {
        $("#labelName").removeClass("onFill");
    });
    jQuery("#Name").focus(function() {
        $("#labelName").removeClass("onFill");
    });

    jQuery("#uscname").blur(function() {
        var company = jQuery.trim(jQuery("#uscname").val());
        if (company != "") {
            $("#labelCompany").addClass("onFill");
        } else {
            $("#labelCompany").removeClass("onFill");
        }
    });

    jQuery("#uscname").click(function() {
        $("#labelCompany").removeClass("onFill");
    });
    jQuery("#uscname").focus(function() {
        $("#labelCompany").removeClass("onFill");
    });

    jQuery("#Email").blur(function() {
        var Email = jQuery.trim(jQuery("#Email").val());
        if (Email != "") {
            $("#labelEmail").addClass("onFill");
        } else {
            $("#labelEmail").removeClass("onFill");
        }
    });

    jQuery("#Email").click(function() {
        $("#labelEmail").removeClass("onFill");
    });
    jQuery("#Email").focus(function() {
        $("#labelEmail").removeClass("onFill");
    });

    jQuery("#Phone").blur(function() {
        var Phone = jQuery.trim(jQuery("#Phone").val());
        if (Phone != "") {
            $("#labelContact").addClass("onFill");
        } else {
            $("#labelContact").removeClass("onFill");
        }
    });

    jQuery("#Phone").click(function() {
        $("#labelContact").removeClass("onFill");
    });
    jQuery("#Phone").focus(function() {
        $("#labelContact").removeClass("onFill");
    });

    jQuery("#Message").blur(function() {
        var Message = jQuery.trim(jQuery("#Message").val());
        if (Message != "") {
            $("#labelDesc").addClass("onFill");
        } else {
            $("#labelDesc").removeClass("onFill");
        }
    });

    jQuery("#Message").click(function() {
        $("#labelDesc").removeClass("onFill");
    });
    jQuery("#Message").focus(function() {
        $("#labelDesc").removeClass("onFill");
    });
});