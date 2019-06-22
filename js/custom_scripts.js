
jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 50) {
      jQuery('nav').addClass('transparent');
    } else {
      jQuery('nav').removeClass('transparent');
    }
  });