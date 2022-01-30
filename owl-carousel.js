$(document).ready(function(){
    $(".banner-carrusel").owlCarousel({
        items: 1,
        center: false,
        loop:true,
        dots:true,
        dotsEach: true  
    });
    $(".propiedades-carrusel").owlCarousel({
        items: 4,
        center: false,
        margin: 30,
        stagePadding: 60
    });
});
