
$(function () {
  // SLIDER JS
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    items: 1
  });

  // SLICK NAV
  $('#menu').slicknav({
    prependTo: ".main-header .main-menu",
    closeOnClick: true,
  });

  // STICKY
  $('.main-header').sticky({
    topSpacing: 0,
  });
  // MAGNIFIC POP UP
  $('.image-link').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });
  // scroll top
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 500) {
      $(".bottomToup").removeClass("active-top");
    } else {
      $(".bottomToup").addClass("active-top");
    }
    if (scroll > 1000) {
      if (checkload) {
        animateValue(document.getElementById("number1"), 0, 63, 4000);
        animateValue(document.getElementById("number2"), 0, 331690, 4000);
        animateValue(document.getElementById("number3"), 0, 98548320, 4000);
        animateValue(document.getElementById("number4"), 0, 318, 4000);
        checkload = false;
      }

    }
  });
  // wow
  var wow = new WOW({
    //disabled for mobile
    mobile: false
  });
  wow.init();
  // preloader
  jQuery(window).load(function () {
    $(".loader").fadeOut(1000);
  });
});

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
};
