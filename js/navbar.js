$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $('.navigation-bar').addClass('black');
    } else {
        $('.navigation-bar').removeClass('black');
    }
});
