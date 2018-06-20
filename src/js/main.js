var button = $("#menu-btn");

button.click(function(e) {
  e.preventDefault();

  if (button.hasClass('open')) {
    button.removeClass('open');
    button.addClass('close');
  } else {
    button.removeClass('close');
    button.addClass('open');
  }
});


$('.mouse_scroll').click (function() {
  $('html, body').animate({scrollTop: $('section.wrap-presentation').offset().top }, 800);
  return false;
});
