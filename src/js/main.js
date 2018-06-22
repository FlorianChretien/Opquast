import WOW from 'wowjs';

$(document).ready(function() {
  var video = $('#bg-video');
  var srcVideo = $("#bg-video").data("src");
  var breakpoint = 640;

  if ($('#bg-video').length > 0) {
    loadVideo();
  }

  // Play video when page resizes
  $(window).resize(function() {
    loadVideo();
  });

  function loadVideo() {
    // Remove existing source tags for mobile
    if ($.browser.mobile) {
      video.remove();
    } else {
      if ($(window).width() > breakpoint) {
        if ($('#bg-video > *').length < 1) {
          console.log("ok");
          $("body > .header").append("<video autoplay loop muted id='bg-video' data-src='" + srcVideo + "'><source src='" + srcVideo + ".mp4' type='video/mp4'><source src='" + srcVideo + ".webm' type='video/webm'><source src='" + srcVideo + ".ogv' type='video/ogv'></video>");
        }
        // Play the video
        $('#bg-video')[0].play();
      } else {
        $('#bg-video').remove();
      }
    }
  }


  new WOW.WOW().init();


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


  $('.mouse_scroll').click(function() {
    $('html, body').animate({scrollTop: $('section.wrap-presentation').offset().top }, 800);
    return false;
  });

  $('a[href="#certification"]').click(function() {
    $('html, body').animate({scrollTop: $('section#certification').offset().top }, 800);
    return false;
  });

  $('a[href="#formation"]').click(function() {
    $('html, body').animate({scrollTop: $('section#formation').offset().top }, 800);
    return false;
  });

  $('a[href="#check-list"]').click(function() {
    $('html, body').animate({scrollTop: $('section#check-list').offset().top }, 800);
    return false;
  });
});

