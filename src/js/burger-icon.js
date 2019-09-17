const burgericon = (function($) {

   /******************************************************************
       VARS
   ******************************************************************/
   // your code here

   let $PrimaryMenue = $('#primary-menu');
   /******************************************************************
       EVENTS
   ******************************************************************/
  $('.burger-icon__lines').on('click', showNavigation);
  $(window).on('resize', toggleAnimation);

   /******************************************************************
       FUNCTIONS
   ******************************************************************/
   // your code here

   function showNavigation() {
      console.log("funktion läuft");
      if($($PrimaryMenue).css('display') == "none")
      {
         $($PrimaryMenue).slideToggle();
         $($PrimaryMenue).css({"display" : "flex", "list-style" : "none", "flex-direction" : "column"});
      }
      else {
         $($PrimaryMenue).slideUp("slow");
      }
   }

   function toggleAnimation() {
      if($(window).width() >= 944)
      {
       $($PrimaryMenue).css({"display" : "flex", "list-style" : "none", "flex-direction" : "row"})
      }
      else {
       $($PrimaryMenue).css({"display" : "none", "list-style" : "none"})
      }
   }

   function transformBurgerIntoCross() {

   }
   /******************************************************************
       PUBLIC_FUNCTIONS
   ******************************************************************/
   return {
       // your code here
   };

})(jQuery);
