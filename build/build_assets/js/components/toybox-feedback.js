$(window).on('scroll', function(){						
  var s = $(window).scrollTop(),
      d = $(document).height(),
      c = $(window).height();
  var scrollPercent = (s / (d - c)) * 100;						
  if (scrollPercent > 98){
    $("#toybox-feedback").css('opacity', '0.75');
  } else {
    $("#toybox-feedback").css('opacity', '0');
  }						
})