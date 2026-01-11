
$('.program-sidebar .nav-tabs li a').click(function () {
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
  } else {
    $('.program-sidebar .nav-tabs li a.active').removeClass('active');
    $(this).addClass('active');
  }
});



$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 500) {
    $("header").addClass("darkHeader");
  } else {
    $("header").removeClass("darkHeader");
  }
});


$(window).scroll(function () {
  var scrollDeep = $(window).scrollTop();
  if (scrollDeep >= 500) {
    $("header").addClass("darkHeader-2");
  } else {
    $("header").removeClass("darkHeader-2");
  }
});




var owl = $('#Services-slider');
owl.owlCarousel({
  margin: 0,
  items: 1,
  dots: false,
  loop: true,
  autoplay: true,

  autoHeight: true,
  nav: true,
  responsive: {
    0: {
      dots: false,
      items: 1
    },
    600: {
      dots: false,
      nav: true,
      items: 2
    },
    1000: {
      dots: false,
      nav: true,
      items: 3
    }
  }
});



var owl = $('#Testimonial-Slider');
owl.owlCarousel({
  margin: 0,
  items: 1,
  dots: true,
  loop: true,
  nav: false,
  autoHeight: true,
  responsive: {
    0: {
      dots: true,
      items: 1
    },
    600: {
      dots: true,
      items: 1
    },
    1000: {
      dots: true,
      items: 1
    }
  }
});



$('#BannerSlider').owlCarousel({
  animateOut: 'slideOutDown',
  animateIn: 'flipInX',
  items: 1,
  margin: 30,
  stagePadding: 30,
  animateOut: 'fadeOut',
  smartSpeed: 450,
  loop: true,
  autoplay: true,
  autoplayTimeout: 1000,
  autoplayHoverPause: false
});


// Initialize homepage banner carousel
$('.banner-slider').owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  smartSpeed: 1000,
  dots: true,
  nav: true,
  navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
});

















new WOW().init();

