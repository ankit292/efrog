// custom js SJ


(function($) {
    if ($('.wow').length) {
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: false // default
        })
        wow.init();
    }



    $(document).ready(function() {


        $('.wow').each(function() {
            $(this).appear(function() {
                $(this).addClass('anim')
            });
        });

        $('.step_img ').appear(function() {
            setTimeout(function() {
                $('.step_img ').addClass('anim')
            }, 600)

        });

        // $('.ui_second_block_bx').css('transform', 'translateX(' + abc + ')');
    });

    $('.hamburger').on('click', function() {
        $('body').toggleClass('navigation_show');

    });


    // $('.overlay_click').on('click', function() {
    //         $('body').removeClass('navigation_show')
    //     })
    // IMG SVG
    $('img.svg').each(function() {
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgW = $img.attr('width');
        // var imgH = $img.attr('height');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's Width
            if (typeof imgW !== 'undefined') {
                $svg = $svg.attr('width', imgW);
            }
            // Add replaced image's Width
            // if (typeof imgH !== 'undefined') {
            //     $svg = $svg.attr('height', imgH);
            // }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
    // =================
})(jQuery);