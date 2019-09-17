const mainNavigation = (function($) {

    /******************************************************************
        VARS
    ******************************************************************/
    // your code here
    /******************************************************************
        EVENTS
    ******************************************************************/
    appendIconToNav();
    //appendSmallIconsToListitems();

    /******************************************************************
        FUNCTIONS
    ******************************************************************/
    // your code here
    function appendIconToNav() {
        $('#primary-menu').prepend('<li class="icon"></li>');
        const $icon = $('.icon');
        $icon.append('<img src="http://localhost/japanBlog/wp-content/uploads/2019/09/cherry-blossom-1-2.png" class="blossom-icon">');
        $icon.css({"text-align" : "center"});
        $('.blossom-icon').css({'padding' : '10px 0px 0px 5px'});
    }

    function appendSmallIconsToListitems () {
        $('a').append('<img src="http://localhost/japanBlog/wp-content/uploads/2019/09/cherry-blossom.png">');
    }

    //$('.blossom-icon').css({"margin-top" : "5px"});



    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/
    return {
        // your code here
    };

})(jQuery);
