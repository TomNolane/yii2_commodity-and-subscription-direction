<script>
    function getC(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = "";
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)
                if (end == -1) {
                    end = cookie.length;
                }
                setStr = unescape(cookie.substring(offset, end));
            }
        }
        return (setStr);
    }

    function setC(name, value, expires, path, domain, secure) {
        document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + expires : "") +
            ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
    }

    function getQueryParams(qs) {
        qs = qs.split("+").join(" ");

        var params = {},
            tokens,
            re = /[?&]?([^=]+)=([^&]*)/g;

        while (tokens = re.exec(qs)) {
            params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
        }

        return params;
    }

    function urlGen(f) {
        var i1 = 'http://79.171.117.10/send_my_order/';
        var i2 = getC("s");
        var i3 = getC("w");
        var i4 = getC("t");
        var i5 = getC("p");
        var i6 = getC("m");
        f.action = i1 + '?s=' + i2 + '&w=' + i3 + '&t=' + i4 + '&p=' + i5 + '&m=' + i6;
        return true;
    }

    var m1dt = new Date();
    after30days = m1dt.setDate(m1dt.getDate() + 30);
    datecoom1 = new Date(after30days);

    var query = getQueryParams(document.location.search);

    if (typeof query.ref !== "undefined") setC("ref", query.ref, datecoom1, "/");
    else setC("ref", 8, datecoom1, "/");
    if (typeof query.s !== "undefined") setC("s", query.s, datecoom1, "/");
    if (typeof query.w !== "undefined") setC("w", query.w, datecoom1, "/");
    if (typeof query.t !== "undefined") setC("t", query.t, datecoom1, "/");
    if (typeof query.p !== "undefined") setC("p", query.p, datecoom1, "/");
    if (typeof query.m !== "undefined") setC("m", query.m, datecoom1, "/");
    if (typeof query.r !== "undefined") setC("r", query.r, datecoom1, "/");
</script>

<script type="text/javascript">
    var QueryString = function () {
        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (typeof query_string[pair[0]] === "undefined") {
                query_string[pair[0]] = decodeURIComponent(pair[1]);
            } else if (typeof query_string[pair[0]] === "string") {
                var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
                query_string[pair[0]] = arr;
            } else {
                query_string[pair[0]].push(decodeURIComponent(pair[1]));
            }
        }
        return query_string;
    }();

    /* user parameters */
    var webmaster_id = 162875;
    var webmaster_api = '3227247a47ced301b4c4a661434d4304';
    var product_id = 3941;

    /* not change */
    var client_ip = '127.0.0.1';
    var client_s = '';
    var client_w = '';
    var client_t = '';
    var client_p = '';
    var client_m = '';

    function sendData(client_name, client_phone, client_email) {
        $.ajax({
            type: 'POST',
            data: {
                ref: webmaster_id,
                api_key: webmaster_api,
                product_id: product_id,
                phone: client_phone,
                name: client_name,
                ip: client_ip,
                s: client_s,
                w: client_w,
                t: client_t,
                p: client_p,
                m: client_m,
                referer: document.referrer,
            },
            url: 'https://m1-shop.ru/send_order/',
            success: function (data) {
                //console.log(data);
                data = JSON.parse(data);
                if (data.result == "ok") {
                    console.log('Заказ создан, ваш ID:' + data.id);
                    $.ajax({
                        type: 'POST',
                        dataType: 'text',
                        data: {
                            name: client_name,
                            phone: client_phone,
                            email: client_email,
                        },
                        url: 'save',
                        success: function (data) {
                            console.log(data);
                        },
                        error: function (xhr, status, error) { // if error occured
                            console.log(xhr.statusText, xhr.responseText, status, error);
                        }
                    });
                    window.location.replace("lk4?lk=" + data.id+"&name="+client_name+"&phone="+client_phone+"&client_email="+client_email);
                } else {
                    alert('Заказ НЕ создан, ответ: ' + data);
                    //window.location.replace("call.php?s=" + client_s + "&w=" + client_w + "&t=" + client_t + "&p=" + client_p + "&m=" + client_m);
                }
            },
            error: function (xhr, status, error) { // if error occured
                console.log(xhr.statusText, xhr.responseText, status, error);

                respjs = JSON.parse(xhr.responseText);
                alert('Заказ НЕ создан, ответ: ' + respjs.message);
                //window.location.replace("call.php?s=" + client_s + "&w=" + client_w + "&t=" + client_t + "&p=" + client_p + "&m=" + client_m);            //$(placeholder).append(xhr.statusText + xhr.responseText);
                //$(placeholder).removeClass('loading');
            }
        });
        return false;
    };


    $(document).ready(function () {

        client_s = QueryString.s;
        client_w = QueryString.w;
        client_t = QueryString.t;
        client_p = QueryString.p;
        client_m = QueryString.m;
        <?php 
        $r = Yii::$app->request->userIP; 
        echo "'client_ip = $r'";
    ?>

        $('form').submit(function () {
            $('input[name=name]', this).val($.trim($('input[name=name]', this).val()));
            if (!$('input[name=name]', this).val()) {
                alert('Укажите корректные ФИО!');
                return false;
            }

            if (!$('input[name=phone]', this).val() || $('input[name=phone]', this).val().length < 7 ||
                $('input[name=phone]', this).val().length > 17) {
                alert('Укажите корректный телефон!');
                return false;
            }

            sendData($('input[name=name]', this).val(), $('input[name=phone]', this).val(), $(
                'input[name=email]', this).val());
            return false;
        });
    });
</script>