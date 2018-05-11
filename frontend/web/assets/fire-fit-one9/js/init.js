$(function(){
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });    
    $('.slider').slick({
            infinite: true,
            autoplay: false,
            dots: false,
            arrows: true,
            fade: false,
            speed: 400,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
            nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>',
        });
now = new Date();
    var perem = (24-now.getHours())*3600;
    $(".countdown").attr("data-timer", perem);
    $(".countdown").TimeCircles({
        "animation": "smooth",
        "bg_width": 0.5,
        "fg_width": 0.022,
        "circle_bg_color": "#79B2BC",
        "time": {
            "Days": {
                "text": "Days",
                "color": "#fff",
                "show": false
            },
            "Hours": {
                "text": "Часов",
                "color": "#fff",
                "show": true
            },
            "Minutes": {
                "text": "Минут",
                "color": "#fff",
                "show": true
            },
            "Seconds": {
                "text": "Секунд",
                "color": "#fff",
                "show": true
            }
        }
    }); 
    
});