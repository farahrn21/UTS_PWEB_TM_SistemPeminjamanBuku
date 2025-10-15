$(function(){
  const path = window.location.pathname;
  $('.navbar-nav .nav-link').each(function(){
    if ($(this).attr('href') === path || path.includes($(this).attr('href'))) {
      $(this).addClass('active');
    }
  });
});
