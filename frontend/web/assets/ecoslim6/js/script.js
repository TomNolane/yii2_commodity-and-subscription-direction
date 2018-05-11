$(document).ready(function(){
   $('#up').click(function(){
       var el = $(this).attr('data-href');
       console.log(el);
       $('html, body').animate({
           scrollTop: $(el).offset().top
       }, 1000);
       return false;
   });
   $(".owl-carousel").owlCarousel({
       autoWidth: false,
       autoPlay: true,
       items: 1,
       dots: false,
       nav: true,
       loop: true,
       pagination: true
   });
});