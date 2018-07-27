$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $('.navigation-bar').addClass('black');
    } else {
        $('.navigation-bar').removeClass('black');
    }
    if (scroll >= 800) {
      document.getElementById("landing-page").style.opacity = "0";
    } else {
      document.getElementById("landing-page").style.opacity = "1";
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

function subscribed() {
  var text = document.getElementById("subscribe-launch"),
  moreText = "We'll reach back to you soon!";
  text.classList.add("fade");
  text.innerHTML = moreText;
}

function nopage(a) {
  var text;
  if (a == 1) {
    text = document.getElementById("button1");
  }
  if (a == 2) {
    text = document.getElementById("button2");
  }
  if (a == 3) {
    text = document.getElementById("button3");
  }
  var moreText = "Comming soon";
  text.classList.add("fade");
  text.innerHTML = moreText;
}
