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
    
    if ($(window).width() < 678) {
         if($('.mobile-slider').length) {
             $('.mobile-slider').addClass('flexslider');
             $('.mobile-slider').flexslider({
                animation: "slide",
                animationLoop: true,
                slideshow: true,
                directionNav: true,
                controlNav: true,
                 selector: ".slides > .slide",
                itemWidth: 100,
                minItems: 3,
                maxItems: 3
            });
         }
    }
});
    