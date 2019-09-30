const mainNavigation = (function($) {

    /******************************************************************
        VARS
    ******************************************************************/
    // your code here
    const $firstListItem = $('#menu-item-17');
    const $secondListItem = $('#menu-item-21');
    const $thirdListItem = $('#menu-item-22');
    const $fourthListItem = $('#menu-item-18');
    const $fifthListItem = $('#menu-item-20');

    console.log($firstListItem.get());
    /******************************************************************
        EVENTS
    ******************************************************************/
   $firstListItem.on('click',changeClass);
   $secondListItem.on('click',changeClass);
   $thirdListItem.on('click',changeClass);
   $fourthListItem.on('click',changeClass);
   $fifthListItem.on('click',changeClass);

    /******************************************************************
        FUNCTIONS
    ******************************************************************/
    // your code here
    function changeClass () {
        $firstListItem.removeClass('is-navitem-active');
        $secondListItem.removeClass('is-navitem-active');
        $thirdListItem.removeClass('is-navitem-active');
        $fourthListItem.removeClass('is-navitem-active');
        $fifthListItem.removeClass('is-navitem-active');

        $(this).addClass('is-navitem-active');
    }



    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/
    return {
        // your code here
    };

})(jQuery);
