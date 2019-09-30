"use strict";

var aboutme = function ($) {
  /******************************************************************
      VARS
  ******************************************************************/
  // your code here

  /******************************************************************
      EVENTS
  ******************************************************************/

  /******************************************************************
      FUNCTIONS
  ******************************************************************/
  // your code here

  /******************************************************************
      PUBLIC_FUNCTIONS
  ******************************************************************/
  return {// your code here
  };
}(jQuery);
"use strict";

var burgericon = function ($) {
  /******************************************************************
      VARS
  ******************************************************************/
  // your code here
  var $PrimaryMenue = $('#primary-menu');
  var $lines = $('.burger-icon__lines');
  /******************************************************************
      EVENTS
  ******************************************************************/

  $lines.on('click', function () {
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
    if ($(window).width() >= 944) {
      $PrimaryMenue.addClass('is-active');
    } else {
      $PrimaryMenue.removeClass('is-active');
    }
  }

  function transformBurgerIntoCross() {
    $lines.toggleClass('is-crossed');
  }
  /******************************************************************
      PUBLIC_FUNCTIONS
  ******************************************************************/


  return {// your code here
  };
}(jQuery);
"use strict";

var mainNavigation = function ($) {
  /******************************************************************
      VARS
  ******************************************************************/
  // your code here
  var $firstListItem = $('#menu-item-17');
  var $secondListItem = $('#menu-item-21');
  var $thirdListItem = $('#menu-item-22');
  var $fourthListItem = $('#menu-item-18');
  var $fifthListItem = $('#menu-item-20');
  console.log($firstListItem.get());
  /******************************************************************
      EVENTS
  ******************************************************************/

  $firstListItem.on('click', changeClass);
  $secondListItem.on('click', changeClass);
  $thirdListItem.on('click', changeClass);
  $fourthListItem.on('click', changeClass);
  $fifthListItem.on('click', changeClass);
  /******************************************************************
      FUNCTIONS
  ******************************************************************/
  // your code here

  function changeClass() {
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


  return {// your code here
  };
}(jQuery);
"use strict";

var pictureSlider = function ($) {
  /******************************************************************
      VARS
  ******************************************************************/
  // your code here
  var $firstChild = $('.mainpicture-gallery__slider-inner li:first-child');
  $firstChild.removeClass('is-passive').addClass('is-active');
  var $lastChild = $('.mainpicture-gallery__slider-inner li:last-child');
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
    console.log("gehts ab?");

    if ($('.is-active').next().length != 0) {
      console.log("gibt noch ein nächstes li");
      console.log($('.is-active').next().length);
      console.log($('.is-active').next());
      $('.is-active').removeClass('is-active').addClass('is-passive').next().removeClass('is-passive').addClass('is-active');
    } else {
      console.log("gibt kein nächstes li");
      $firstChild.removeClass('is-passive').addClass('is-active');
      $lastChild.removeClass('is-active').addClass('is-passive');
    }
  }

  function moveToPreviousPicture() {
    if ($('.is-active').prev().length != 0) {
      $('.is-active').removeClass('is-active').addClass('is-passive').prev().removeClass('is-passive').addClass('is-active');
    } else {
      $lastChild.removeClass('is-passive').addClass('is-active');
      $firstChild.removeClass('is-active').addClass('is-passive');
    }
  }
  /******************************************************************
      PUBLIC_FUNCTIONS
  ******************************************************************/


  return {// your code here
  };
}(jQuery);
"use strict";

var example = function ($) {
  /******************************************************************
      VARS
  ******************************************************************/
  // your code here

  /******************************************************************
      EVENTS
  ******************************************************************/
  // your code here

  /******************************************************************
      FUNCTIONS
  ******************************************************************/
  // your code here

  /******************************************************************
      PUBLIC_FUNCTIONS
  ******************************************************************/
  return {// your code here
  };
}(jQuery);