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
