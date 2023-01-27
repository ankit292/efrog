$(document).ready(function(){
// Hero Unit Carousel
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    loop: true,
    speed: 1000,
    // mousewheel: true,
    mousewheelReleaseOnEdges: true,
    // freeMode: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});



    // fix sidebar ad widget on scroll
    // var elemScroll = $(".sidebar .ad").offset().top-70;
    // var loadMoreScroll = $(".load-more").offset().top-650;
    // var getWidth = $(".sidebar").width()+"px";
    // var mainAreaHeight = $(".main-area").height()+"px";
    // $(window).scroll(function(){

    //     var currentScroll = $(window).scrollTop();
    //     if(currentScroll >= elemScroll){
    //         $(".sidebar .ad").removeAttr("style");
    //         $(".sidebar .ad").css({"position":"fixed", "top":"75px", "width":getWidth})
    //     }else{
    //         $(".sidebar .ad").removeAttr("style");
    //     }
    //     if(currentScroll >= loadMoreScroll){

    //         $(".sidebar").css({"height":mainAreaHeight});
    //         $(".sidebar .ad").removeAttr("style");
    //         $(".sidebar .ad").css({"position":"absolute", "top":"auto", "bottom":"-20px", "width":getWidth})
    //     }
    // });
});