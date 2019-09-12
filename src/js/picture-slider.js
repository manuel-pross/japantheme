const pictureSlider = (function($) {

    /******************************************************************
        VARS
    ******************************************************************/
    // your code here
    let $firstChild = $('.mainpicture-gallery__slider-inner img:first-child');
    let $lastChild = $('.mainpicture-gallery__slider-inner img:last-child');
    
    /******************************************************************
        EVENTS
    ******************************************************************/
   // your code here

    /******************************************************************
        FUNCTIONS
    ******************************************************************/
    // your code here

    $('.mainpicture-gallery__slider-next').on('click', function() {
        if($('.is-active').next().length != 0) {
            $('.is-active').removeClass('is-active').addClass('is-passive').next().removeClass('is-passive').addClass('is-active');
        }else {
            $firstChild.removeClass('is-passive').addClass('is-active');
            $lastChild.removeClass('is-active').addClass('is-passive');
        }
    });

    $('.mainpicture-gallery__slider-prev').on('click', function() {
        if($('.is-active').prev().length != 0) {
            $('.is-active').removeClass('is-active').addClass('is-passive').prev().removeClass('is-passive').addClass('is-active');
        }else {
            $lastChild.removeClass('is-passive').addClass('is-active');
            $firstChild.removeClass('is-active').addClass('is-passive');
        }
    });


    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/
    return {
        // your code here
    };
    
})(jQuery);