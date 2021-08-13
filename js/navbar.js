$(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
        $('#navbar_top').addClass("fixed-top");
        $('#navbar_top').addClass("white-bg");
        $('#navbar_top').addClass("shadow");
        $('#nav-bar').css("background", 'white');

        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
    } else {
        $('#navbar_top').removeClass("fixed-top");
        $('#navbar_top').removeClass("shadow");
        // remove padding top from body
        $('body').css('padding-top', '0');
    }
});
