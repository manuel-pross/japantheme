const pictureSlider = (function($) {

    /******************************************************************
        VARS
    ******************************************************************/
    // your code here
    let $firstChild = $('.mainpicture-gallery__slider-inner li:first-child');
    $firstChild.removeClass('is-passive').addClass('is-active');
    let $lastChild = $('.mainpicture-gallery__slider-inner li:last-child');

    console.log($firstChild);
    /******************************************************************
        EVENTS
    ******************************************************************/
   // your code here

   $('.mainpicture-gallery__slider-next').on('click', moveToNextPicture);
   $('.mainpicture-gallery__slider-prev').on('click', moveToPreviousPicture);

    /******************************************************************
        FUNCTIONS
    ******************************************************************/
    // your code here

    function moveToNextPicture() {
        console.log("gehts ab?")
        if($('.is-active').next().length != 0) {
            console.log("gibt noch ein nächstes li");
            console.log($('.is-active').next().length);
            console.log($('.is-active').next());
            $('.is-active').removeClass('is-active').addClass('is-passive').next().removeClass('is-passive').addClass('is-active');
        }else {
            console.log("gibt kein nächstes li")
            $firstChild.removeClass('is-passive').addClass('is-active');
            $lastChild.removeClass('is-active').addClass('is-passive');
        }
    }

    function moveToPreviousPicture() {

        if($('.is-active').prev().length != 0) {
            $('.is-active').removeClass('is-active').addClass('is-passive').prev().removeClass('is-passive').addClass('is-active');
        }else {
            $lastChild.removeClass('is-passive').addClass('is-active');
            $firstChild.removeClass('is-active').addClass('is-passive');
        }
    }

    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/
    return {
        // your code here
    };

})(jQuery);
