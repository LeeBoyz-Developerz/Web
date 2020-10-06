/*

LeeBoyz Template


*/
; (function ($) {

"use strict";

var $window = $(window);
var $body = $('body');


// sticky footer
var blankSpace = $window.height() - $body.height();
var content = $('#page-content');
content.css('min-height',content.height() + blankSpace + 'px');

$( window ).resize(function() {
  var blankSpace = $window.height() - $body.height();
  var content = $('#page-content');
  content.css('min-height',content.height() + blankSpace + 'px');
});

// Header Search
// ---------------------------------------------------------
var $headerSearchForm = $('#header .header-search-form');

$('.header-search-button').on('click', function (event) {
  event.preventDefault();

  $body.addClass('header-search-form-active');

  setTimeout(function () {
    $headerSearchForm.children('input[type="text"]').focus();
  }, 500);
});

$headerSearchForm.children('input[type="text"]').on('blur', function () {
  $body.removeClass('header-search-form-active');
});



// Fixed Header Main Nav
// ---------------------------------------------------------
$('#header .header-main-nav').each(function () {
  var $this = $(this);

  $this.waypoint({
      handler: function (direction) {
          if (direction === 'down') {
              $body.addClass('header-main-nav-sticky');
          } else {
              $body.removeClass('header-main-nav-sticky');
          }
      },
      offset: -100
  });
});



// Mobile Main Nav
// ---------------------------------------------------------
$('.mobile-main-nav').each(function () {
  var $this = $(this),
      $li = $this.find('li'),
      length = $li.length;

  $this.addClass('menu-items-' + length);
  $li.css('height', (100 / length) + '%');
});

$('.mobile-main-nav-open').on('click', function (event) {
  event.preventDefault();

  $body.addClass('mobile-main-nav-active');
});

$('.mobile-main-nav-close').on('click', function (event) {
  event.preventDefault();

  $body.removeClass('mobile-main-nav-active');
});



// Home Page Slider
// ---------------------------------------------------------
$('.home-page-slider').each(function () {
  var $slider = $(this),
      $slides = $slider.find('.slides .slide'),
      $current = $slider.find('.slider-controls .current'),
      $total = $slider.find('.slider-controls .total'),
      windowHeight = 0,
      height = 0,
      resizeTimer;

  $slides.each(function () {
    var $this = $(this),
        image = $this.data('background-image');

    $this.css('background-image', 'url("' + image + '")');
  });

  function sliderResize() {
    height = 0;
    windowHeight = $window.height() + 80;

    $slides.css('min-height', windowHeight + 'px');

    $slides.each(function () {
      var slideHeight = $(this).innerHeight();

      if (slideHeight > height) {
        height = slideHeight;
      }
    });

    if (height > windowHeight) {
      $slides.css('min-height', height + 'px');
    }
  }

  $slider.find('.flexslider').flexslider({
    slideshowSpeed: 7500,
    animationSpeed: 750,
    directionNav: true,
    controlNav: false,
    prevText: '',
    nextText: '',
    controlsContainer: $slider.find('.slider-controls'),
    start: function (slider) {
      sliderResize();
      $current.html('0' + (slider.currentSlide + 1));
      $total.html('0' + slider.count);
    },
    after: function (slider) {
      $current.html('0' + (slider.currentSlide + 1));
    }
  });

  $window.on('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(sliderResize, 250);
  });
});



// Animations
// ---------------------------------------------------------
function pageAnimations(element) {
  var $element = $(element),
      animation = $element.data('animation'),
      delay = $element.data('animation-delay'),
      duration = $element.data('animation-duration');

  if (delay) {
    $element.css('animation-delay', delay + 'ms');
  }

  if (duration) {
    $element.css('animation-duration', duration + 'ms');
  }

  $element.addClass('animated ' + animation);
}

$('.animate').waypoint(function () {
  pageAnimations(this.element);
}, {
  triggerOnce: true,
  offset: '75%'
});

$('.animate-in-view').waypoint(function () {
  pageAnimations(this.element);
}, {
  triggerOnce: true,
  offset: 'bottom-in-view'
});

$('.animate-multiple').waypoint(function () {
  $(this.element).find('[data-animation]').each(function () {
    pageAnimations(this);
  });
}, {
  triggerOnce: true,
  offset: '75%'
});

$(".ui-input .dropdown-menu li a").click(function (event) {
    event.preventDefault();
    var selText = $(this).text();
    $(this).parents('.dropdown').find('.dropdown-toggle').html(selText);
});

}(jQuery));

//Select the navigation menu base on URL.
$(function () {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);
    if (path == '') {
        path = "/";
    }
    $(".nav a").each(function () {
        if ($(this).attr('href') == path) {
            $(this).parent().addClass("active");
        }
    });
});