const burgericon = (function($) {

   /******************************************************************
       VARS
   ******************************************************************/
   // your code here

   const $PrimaryMenue = $('#primary-menu');
   const $lines = $('.burger-icon__lines');
   /******************************************************************
       EVENTS
   ******************************************************************/
  $lines.on('click', function() {
    toggleNavigation();
    transformBurgerIntoCross();

  });
  $(window).on('resize', showNavigation);

   /******************************************************************
       FUNCTIONS
   ******************************************************************/
   // your code here

   function toggleNavigation() {

      $PrimaryMenue.slideToggle();
      $PrimaryMenue.toggleClass('is-active');

   }

   function showNavigation() {
      if($(window).width() >= 944)
      {
       $PrimaryMenue.addClass('is-active');
      }
      else {
       $PrimaryMenue.removeClass('is-active');
      }
   }

   function transformBurgerIntoCross() {
    $lines.toggleClass('is-crossed');
   }
   /******************************************************************
       PUBLIC_FUNCTIONS
   ******************************************************************/
   return {
       // your code here
   };

})(jQuery);
