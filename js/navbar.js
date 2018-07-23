$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $('.navigation-bar').addClass('black');
    } else {
        $('.navigation-bar').removeClass('black');
    }
});

$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
});

// DROP DOWN
var i = 0;
function myFunction() {
  if (i == 0) {
    $('.drop-down').addClass('show');
    $('.navigation-bar').addClass('show-white');
    i = 1;
  } else {
    $('.drop-down').removeClass('show');
    $('.navigation-bar').removeClass('show-white');
    i = 0;
  }
}

function closeMenu() {
  $('#nav-icon').toggleClass('open');
  $('.drop-down').removeClass('show');
  $('.navigation-bar').removeClass('show-white');
  i = 0;
}
