(function()
{
    $( document ).ready(function() {
        var email = $.urlParam('email');
        var first_name = $.urlParam('first_name');

$( "body" ).append( "<img height=\"1\" width=\"1\" style=\"display:none\"   src='http://rest.investmen.pro/optin?email=" + decodeURIComponent(email)+"&first_name="+first_name+"'>" );

    });

})();

