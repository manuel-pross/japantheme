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

var mainNavigation = function ($) {
  /******************************************************************
      VARS
  ******************************************************************/
  // your code here

  /******************************************************************
      EVENTS
  ******************************************************************/
  appendIconToNav(); //appendSmallIconsToListitems();

  /******************************************************************
      FUNCTIONS
  ******************************************************************/
  // your code here

  function appendIconToNav() {
    $('#primary-menu').prepend('<li class="icon"></li>');
    var $icon = $('.icon');
    $icon.append('<img src="http://localhost/japanBlog/wp-content/uploads/2019/09/cherry-blossom-1-2.png" class="blossom-icon">');
    $icon.css({
      "text-align": "center"
    });
    $('.blossom-icon').css({
      'padding-top': '5px'
    });
  }

  function appendSmallIconsToListitems() {
    $('a').append('<img src="http://localhost/japanBlog/wp-content/uploads/2019/09/cherry-blossom.png">');
  } //$('.blossom-icon').css({"margin-top" : "5px"});

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
  var $firstChild = $('.mainpicture-gallery__slider-inner img:first-child');
  var $lastChild = $('.mainpicture-gallery__slider-inner img:last-child');
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
    if ($('.is-active').next().length != 0) {
      console.log('move to next nextPicture');
      $('.is-active').removeClass('is-active').addClass('is-passive').next().removeClass('is-passive').addClass('is-active');
    } else {
      $firstChild.removeClass('is-passive').addClass('is-active');
      $lastChild.removeClass('is-active').addClass('is-passive');
    }
  }

  function moveToPreviousPicture() {
    if ($('.is-active').prev().length != 0) {
      console.log('move to next previousPicture');
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