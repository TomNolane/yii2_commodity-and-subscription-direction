var host,availableCounter, maxUsersShow;
var styles = '#vip-counter2 {' +
    '        left: 30px;' +
    '        bottom: 30px;' +
    '        position: fixed;' +
    '           width: 60px;' +
    '    }' +
    '#online-counter2 {' +
    '        right: 30px;' +
    '        bottom: 30px;' +
    '        position: fixed;    ' +
    '    }' +
    '#online-counter2 p {' +
    '        color: #8af517;' +
    '        max-width: 120px;' +
    '        font-weight: bold;' +
    '        text-align: center;' +
    '        margin-left: -30px;' +
    '        margin-top: 25px;' +
    '    }' +
    '#vip-counter2 p {' +
    '        color: #8af517;' +
    '        max-width: 120px;' +
    '        font-weight: bold;' +
    '        text-align: center;' +
    '        margin-left: -10px;' +
    '        margin-top: 25px;' +
    '    }' +
    '.pulse-icon {' +
    '        position: relative;' +
    '        display: inline-block;' +
    '    }' +
    '.pulse-icon .elements {' +
    '        position: absolute;' +
    '        top: 0;' +
    '        left: 0;' +
    '        z-index: 1;' +
    '    }' +
    '.pulse-icon .circle {' +
    '        border-radius: 50%;' +
    '        position: absolute;' +
    '    }' +
    '.pulse-icon .circle-outer {' +
    '        width: 100px;' +
    '        height: 100px;' +
    '        background: linear-gradient(-180deg, rgba(124, 248, 20, .12) 0%, rgba(124, 248, 20, .1) 100%);' +
    '        top: -20px;' +
    '        left: -20px;' +
    '        animation: grow-circles 3s linear infinite both;' +
    '    }' +
    '.pulse-icon .circle-inner {' +
    '        width: 80px;' +
    '        height: 80px;' +
    '        top: -10px;' +
    '        left: -10px;' +
    '        background: linear-gradient(-180deg, rgba(124, 248, 20, .12) 0%, rgba(124, 248, 20, .1) 100%);' +
    '        animation: grow-circles 3s linear infinite both;' +
    '    }' +
    '.pulse-icon .icon-wrap {' +
    '        position: relative;' +
    '        width: 60px;' +
    '        height: 60px;' +
    '        box-shadow: 0 12px 12px 0 rgba(0, 0, 0, .1);' +
    '        text-align: center;' +
    '        line-height: 1;' +
    '        display: inline-block;' +
    '        border-radius: 50%;' +
    '        color: #6a1b9a;' +
    '        background: #7cf814;' +
    '        z-index: 2;' +
    '    }' +
    '.pulse-icon .icon-wrap {' +
    '        color: #131e30;' +
    '    }' +
    '.pulse-icon .vip-counter-number {' +
    '        display: inline-block;' +
    '        margin: 0;' +
    '        float: none;' +
    '        position: absolute;' +
    '        top: 50%;' +
    '        left: 50%;' +
    '        transform: translate(-50%,-50%);' +
    '    }' +
    '.online-counter-number, .vip-counter-number {' +
    '        float: left;' +
    '        font-size: 2em;' +
    '        position: absolute;' +
    '        top: 50%;' +
    '        left: 50%;' +
    '        transform: translate(-50%,-50%);' +
    '    }' +
    '.vip-counter-number {' +
    '        margin-right: 25px;' +
    '    }' +
    '@keyframes grow-circles {' +
    '        0% {' +
    '            opacity: .85;' +
    '        transform: scale(1)' +
    '    }' +
    '        50% {' +
    '            opacity: 1;' +
    '        transform: scale(1.05)' +
    '    }' +
    '        80% {' +
    '            opacity: .85;' +
    '        transform: scale(1)' +
    '    }' +
    '    }'+
    '#winners-1321545646{'+
    '       position: fixed;'+
    '       top: 0;'+
    '       right: 2em;'+
    '       width: 250px;'+
    '       padding: 5px;'+
    '       background: rgba(0,0,0, 0.5);'+
    '       box-shadow: 0 0 10px rgba(0,0,0, 0.5);'+
    '       z-index: 999999'+
    '    }'+
    '#winners-1321545646 .winner{'+
    '        padding: 5px;'+
    '        border: 1px solid #000;'+
    '    }'+
    '#winners-1321545646 .winner + .winner{'+
    '        margin-top: 5px;'+
    '    }'+
    '#winners-1321545646 .winner table{'+
    '        width: 100%;'+
    '    }'+
    '#winners-1321545646 .winner td{'+
    '        vertical-align: middle;'+
    '    }'+
    '#winners-1321545646 .winner table p{'+
    '        font-size: 1em;'+
    '        margin: 0;'+
    '        padding: 0;'+
    '        line-height: 1;'+
    '        text-align: center;'+
    '        color: #fff;'+
    '    }'+
    '#winners-1321545646 .winner table .win{'+
    '        margin-top: 5px;'+
    '        font-size: 1.2em;'+
    '    }'+
    '#winners-1321545646 .winner table .win-size{'+
    '        font-weight: bold;'+
    '        margin-top: 5px;'+
    '        color: #8af517;'+
    '    }';

function appendElements(options) {
    host = options.host;
    maxUsersShow = options.maxUsersShow ? options.maxUsersShow : 2;
    availableCounter = options.availableCounter;

    if (!window.jQuery) {
        var script = document.createElement('script');
        script.setAttribute('type', 'text/javascript');
        script.setAttribute('src', host + '/jquery.js');
        document.body.appendChild(script);

        script.onload = function () {
            createElements(options)
        }
    } else {
        createElements(options)
    }

    function createElements(options) {

        var css = document.createElement('style');
        css.type = 'text/css';
        css.id = 'newStyle';
        if (css.styleSheet) css.styleSheet.cssText = styles;
        else css.appendChild(document.createTextNode(styles));
        $('head')[0].append(css);

        if(options.styles.length > 0){
            var css2 = document.createElement('style');
            css2.type = 'text/css';
            css2.id = 'newStyle2';
            if (css2.styleSheet) css2.styleSheet.cssText = options.styles;
            else css2.appendChild(document.createTextNode(options.styles));
            $('head')[0].append(css2);
        }

        var onlineCounter = '<div class="pulse-icon">' +
            '    <div class="icon-wrap">' +
            '    <span class="online-counter-number"></span>' +
            '    </div>' +
            '    <div class="elements">' +
            '    <div class="circle circle-outer"></div>' +
            '    <div class="circle circle-inner"></div>' +
            '    </div>' +
            '    </div>' +
            '    <p>'+options.onPage+'</p>';

        var vipCounter =  '<div id="vip-counter2">' +
            '    <div class="pulse-icon">' +
            '    <div class="icon-wrap">' +
            '    <span class="vip-counter-number"></span>' +
            '    </div>' +
            '    <div class="elements">' +
            '    <div class="circle circle-outer"></div>' +
            '    <div class="circle circle-inner"></div>' +
            '    </div>' +
            '    </div>' +
            '    <p>'+options.available+'</p>' +
            ' </div>';

        var body = $('body')[0];

        var elements = document.createElement('div');
        elements.setAttribute('id','online-counter2');
        body.append(elements);
        $('#online-counter2').html(onlineCounter);

        var elements2 = document.createElement('div');
        elements2.setAttribute('id','vip-counter2');
        body.append(elements2);
        $('#vip-counter2').html(vipCounter);

        function addWinner(win) {
            var script = document.createElement('script');
            script.setAttribute('type', 'text/javascript');
            script.setAttribute('src', win);
            document.body.appendChild(script);
            script.onload = function () {
                startShowUsers()
            }
        }

        function startShowUsers() {
            var elements3 = document.createElement('div');
            elements3.setAttribute('id','winners-1321545646');
            body.append(elements3);
            appendWinner('#winners-1321545646', maxUsersShow);
        }


        var c;
        $(".vip-counter-number").html(availableCounter);

        c = rand(101, 110);
        $(".online-counter-number").html(c);
        jQuery(function (n) {
            var t = n("#main-page-counter");
            startTimer(420, t)
        });
        setTimeout(function () {
            SetVipCouter();
            SetOnlineCounter()
        },2000);

        if(options.users.length > 0){
            addWinner(options.users)
        }

    }
}

function appendWinner(where, maxUsers) {
    var data = winUsers123[rand(0, Number(winUsers123.length-1))];

    var template ='<div class="winner" style="opacity: 0">'+
        '        <table>'+
        '        <tr>'+
        '        <td>'+
        '        <img src='+host+data.avatar+'>'+
        '        </td>'+
        '        <td>'+
        '        <p>'+
        '        <span class="winner-name">'+data.name+'</span>'+
        '        <span class="winner-from">'+data.from+'</span>'+
        '   </p>'+
        '   <p class="win">'+
        '        <span class="win-text">'+data.text+'</span>'+
        '    <span class="win-size">'+data.size+'</span>'+
        '       </p>'+
        '       </td>'+
        '        </tr>'+
        '        </table>'+
        '</div>';
    console.log(maxUsers);
    if(maxUsers && maxUsers > 1){
        if($(where+' .winner').length >=maxUsers){
            $(where+' .winner:first-child').remove();
        }

        $(where).append(template);
        $(where+' .winner:last-child').animate({opacity: 1},500);
    }else{
        $(where+' .winner').remove();
        $(where).append(template);
        $(where+' .winner:last-child').animate({opacity: 1},500);
    }


    setTimeout("appendWinner('#winners-1321545646', maxUsersShow)", rand(6e3, 9e3))
}

function rand(n, t) {
    return Math.floor(Math.random() * (t - n + 1)) + n
}

function SetVipCouter() {
    var t = $(".vip-counter-number")
        , n = parseInt($(t).html());
    // n = n > 5 ? n - rand(1, 3) : n - rand(-2, 2);
    // n < 2 ? $(t).html(1) : $(t).html(n);

    n = !n ? $(t).html(availableCounter) : n > 1 ? $(t).html(n - 1) : '';
    setTimeout("SetVipCouter()", rand(6e3, 9e3))
}

function SetOnlineCounter() {
    var t = $(".online-counter-number")
        , n = parseInt($(t).html());
    n = n < 250 ? n + rand(-1, 3) : n - rand(1, 3);
    $(t).html(n);
    setTimeout("SetOnlineCounter()", rand(6e3, 9e3))
}

function startTimer(n, t) {
    var u = n, i, r;
    setInterval(function () {
        i = parseInt(u / 60, 10);
        r = parseInt(u % 60, 10);
        i = i < 10 ? "0" + i : i;
        r = r < 10 ? "0" + r : r;
        t.text(i + ":" + r);
        --u < 0 && (u = n)
    }, 1e3)
}

