$(document).ready(function () {
    $('input[name="number"]').inputmask("+7(999)999-99-99");
    $(".fancybox").fancybox({
        openEffect: 'fade',
        closeEffect: 'fade',
        nextEffect: 'fade',
        prevEffect: 'fade',
        'padding':'0',
        helpers: {
            overlay: {
                locked: false
            }
        },
        beforeShow: function () {
            $("body").css({"overflow-y": "hidden"}), $("html").addClass("fancybox-margin")
        },
        afterClose: function () {
            $("body").css({"overflow-y": "visible"}), $("html").removeClass("fancybox-margin")
        }
    });
    $('.fancybox_sert').fancybox({
        wrapCSS : 'catalog-wrap-fancy',
        openEffect: 'fade',
        closeEffect: 'fade',
        nextEffect: 'fade',
        prevEffect: 'fade',
        padding:0,
        helpers: {
            overlay: {
                locked: false
            }
        },
        beforeShow: function () {
            $("body").css({"overflow-y": "hidden"}), $("html").addClass("fancybox-margin")
        },
        afterClose: function () {
            $("body").css({"overflow-y": "visible"}), $("html").removeClass("fancybox-margin")
        }
    });
    $('.low-res-nav').click(function () {
        $('#razdel-nav').slideToggle();
    });
    $('.nav-close-img').click(function(){
        $('#razdel-nav').slideToggle();
    });

    $('.low-res-nav-2').click(function () {
        $('#razdel-nav-2').slideToggle();
    });
    $('.nav-close-img-2').click(function(){
        $('#razdel-nav-2').slideToggle();
    });

    $('.low-res-nav-3').click(function () {
        $('#razdel-nav-3').slideToggle();
    });
    $('.nav-close-img-3').click(function(){
        $('#razdel-nav-3').slideToggle();
    });
    $('.menu-upper').scrollToFixed( {
        top: 100,
        limit: $('.menu-upper').offset().bottom
    });
    $('.mob-header').scrollToFixed( {
        top: 100,
        limit: $('.mob-header').offset().bottom
    });
    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 2000,
        easingType: 'linear'
    };
    $().UItoTop({ easingType: 'easeOutQuart' });
    $(".faq-element").click(function () {
        if ($(this).hasClass("opened")) {
            $(this).removeClass("opened");
            $(this).find(".faq-answer").slideToggle()
        }else {
            var e = $(".faq-element.opened");
            e.find(".faq-answer").slideToggle();
            e.removeClass("opened");
            $(this).addClass("opened");
            $(this).find(".faq-answer").slideToggle()
        }
    });
    $('.faq-element').first().trigger('click');
    $('.watch-more-questions').click(function(){
        $('.watch-more-questions').css({'display' : 'none'});
        $('.faq-element-display-none').css({'display' : 'block'});
    });
    /*$('.third-item-zoom').click(function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $(this).parents('.third-item').addClass('active');
        } else{
            $(this).removeClass('active');
            $(this).parents('.third-item').removeClass('active');
        }
    });*/
    $(".third-item-zoom").on("mouseover", function(){
        $(this).addClass('active');
        $(this).parents('.third-item').addClass('active');
    });
    $(".third-item-zoom").on("mouseout", function(){
            $(this).removeClass('active');
        $(this).parents('.third-item').removeClass('active');
    });
    $('.sixth-slider').slick({
        prevArrow: '<div class="slick-prev"></div>',
        nextArrow: '<div class="slick-next"></div>',
        adaptiveHeight: true,
        slidesToShow: '1',
        slidesToScroll: 1,
        dots: true,
        fade: true
    });
    $('.sixth-item-right-read-all').click(function(){
        $(this).css({'display' : 'none'});
        $(this).parents('.sixth-item-right').find('.sixth-item-right-hide-all').css({'display' : 'block'});
        $(this).parents('.sixth-item-right').find('.sixth-item-right-text-hid').slideToggle();
    });
    $('.sixth-item-right-hide-all').click(function(){
        $(this).css({'display' : 'none'});
        $(this).parents('.sixth-item-right').find('.sixth-item-right-read-all').css({'display' : 'block'});
        $(this).parents('.sixth-item-right').find('.sixth-item-right-text-hid').slideToggle();
    });
    $(".ninth-item-zoom").on("mouseover", function(){
        $(this).addClass('active');
        $(this).parents('.ninth-item').addClass('active');
    });
    $(".ninth-item-zoom").on("mouseout", function(){
        $(this).removeClass('active');
        $(this).parents('.ninth-item').removeClass('active');
    });

    $('.mob-slider-second').slick({
        adaptiveHeight: true,
        slidesToScroll: 1,
        dots: true
    });
    $('.mob-slider-third').slick({
        adaptiveHeight: true,
        slidesToScroll: 1,
        dots: true
    });
    $('.fourth-slider').slick({
        adaptiveHeight: true,
        slidesToScroll: 1,
        dots: true
    });
    $('.ninth-slider').slick({
        adaptiveHeight: true,
        slidesToScroll: 1,
        dots: true
    });
    $('.tenth-slider').slick({
        adaptiveHeight: true,
        slidesToScroll: 1,
        dots: true
    });

    $('form').submit(function(event) {
        event.preventDefault();
        var form = $(this);

        $.ajax({
            type : form.attr('method'),
            url : form.attr('action'),
            data : form.serialize(),
            dataType: 'json',
            complete: function(e) {
                $('#load-modal').hide();
            },
            beforeSend: function(e) {
                $('#load-modal').show();
            },
            success: function(json) {
                if (json.status=='ok'){

                    yaCounter48629732.reachGoal('go_form');

                    gtag('event', 'a2', {event_category: 'go1', event_action: 'a2'});

                    // dataLayer.push({"event":"form_ekv"})
                    if (json.redirect) {
                        window.location.href = json.redirect;
                    }
                } else if (json.status=='error') {
                    alert('Ошибка! ' + json.message);
                } else {
                    alert(json.status + ' ' + json.message);
                }
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            // Optionally alert the user of an error here...
            var textResponse = jqXHR.responseText;
            alert('Ошибка! ' + textResponse);
        });
    });

});
