jQuery(document).ready(function() {   
    $('#initial-popup').modal()
    $('.home-slider').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: true,
        directionNav: false,
        controlNav: false
    });
    $('.icon-menu').click(function() {
        $('header .seccions-nav').addClass("show");   
    });
    $('.close-menu').click(function() {
        $('header .seccions-nav').removeClass("show");  
    });
});
    