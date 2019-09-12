const mainNavigation = (function($) {

    /******************************************************************
        VARS
    ******************************************************************/
    // your code here
    
    
    /******************************************************************
        EVENTS
    ******************************************************************/
    appendIconToNav();

    /******************************************************************
        FUNCTIONS
    ******************************************************************/
    // your code here
    function appendIconToNav() {
        $('#primary-menu').prepend('<li class="icon"></li>');
        const $icon = $('.icon');
        $icon.append('<a href="//localhost:3000/japanBlog/"><img src="http://localhost/japanBlog/wp-content/uploads/2019/09/cherry-blossom-1-2.png" class="blossom-icon"></a>');
        $icon.css({"text-align" : "center"});
    }

    //$('.blossom-icon').css({"margin-top" : "5px"});



    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/
    return {
        // your code here
    };
    
})(jQuery);