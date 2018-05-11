function popupOpen() {
    if ($.urlParam('bp')) {
        return false;
    }

    const mediaFind = window.matchMedia("(min-width: 1024px)");
    mediaFind.matches && $("#sign-up-modal").modal("show")
}

function randomInteger(min, max) {
    var rand = min + Math.random() * (max - min)
    rand = Math.round(rand);
    return rand;
}

var counter = randomInteger(95, 105);
$('.online-counter-number').empty().append(counter);

var userCounter =  setInterval(function(){
    var currentCount = counter + randomInteger(1, 5);
    $('.online-counter-number').empty().append(currentCount);

    if( currentCount > 200) {
        clearInterval(userCounter);
    }

}, 10000);


function beforeSendForm(){
    var nameUser = $('.name_input').val();
    var emailUser = $('.email_input').val();
    var sessionUser = $('.session').val();
    var affiliate_idUser = $('.affiliate_id').val();
    // ajax on our API
    var qqq = 'http://rest.investmen.pro/optin'+'?first_name='+nameUser+'&email='+emailUser+'&session_id='+sessionUser+'&affiliate_id='+affiliate_idUser;
    $('#imgimg').attr('src', qqq);
};

function generateIframe(){
    var cklickId = $.urlParam('session');
    var linkIframe = 'https://binomo.com/vn/promo/registration_new?a=5c715252165b&ac=webmasterid&sa=wmsubacc&click_id=' + cklickId + '&email=1' ;
    $('.iframe_box').attr('src', linkIframe);
};


// function sendNotification(title, options, link) {

//     if ("Notification" in window) {
//         Notification.requestPermission(newMessage);
    
//         function newMessage(permission) {
//             if( permission != "granted" ) return false;
//             // var notify = new Notification(title, options);
//             // function clickFunc() { window.open(link, '_blank'); }
//             // notification.onclick = clickFunc;
//             var notify = new Notification("Thanks for letting notify you");

//         };

//     }

// }
