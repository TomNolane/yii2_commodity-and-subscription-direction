// $(function(){
//     $('a[href^="#"]').click(function (){
//         var elementClick = $(this).attr("href");
//         var destination = $(elementClick).offset().top - 20;
//         jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
//         return false;
//     });
// });

// jQuery(document).ready(function($) {
//     $(".scroll").click(function(event){     
//         event.preventDefault();
//         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
//     });
// });
  
$('a[href*=#]:not([href=#])').on('click', function (event) {
    event.preventDefault();
    var element = $(this.hash);
    $('html,body').animate({ scrollTop: element.offset().top },2000, 'swing');
});