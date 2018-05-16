$(document).ready(function () {

    var ip = "178.19.251.137";

    var countries = {
        "RU":{
            "currency":"руб",
            "currency_small":"р",
            "price_caps":"39",
            "price_caps_discount":"39",
            "price_caps_full":"130",

            "price_bank":"1490",
            "price_bank_prepayment":"1192",
            "price_bank60":"2490",
            "price_bank60_prepayment":"1992",
            "price_bank90":"3250",
            "price_bank90_prepayment":"2600",

            "price_bank_instagram":"1490",
            "price_bank_bf_full":"1490",
            "price_bank_bf":"1043",
            "price_bank_discount":"1000",
            "price_bank_full":"2190",
            "example_phone":"+79031234567",
            "icarin_price_caps":"65",
            "icarin_price_caps_discount":"39",
            "icarin_price_caps_full":"130",
            "icarin_price_bank":"1950",
            "icarin_price_bank_discount":"1950",
            "icarin_price_bank_full":"3900",

            "tanadem_price_caps":"299",
            "tanadem_price_caps_discount":"699",
            "tanadem_price_caps_full":"299",

            "tanadem_price_bank":"2990",
            "tanadem_price_bank_discount":"2990",
            "tanadem_price_bank_full":"6999"

        },
        "KZ":{
            "currency":"тг",
            "currency_small":"т",
            "price_caps":"365",
            "price_caps_discount":"224",
            "price_caps_full":"730",

            "price_bank":"10970",
            "price_bank_prepayment":"9000",
            "price_bank60":"20000",
            "price_bank60_prepayment":"15000",
            "price_bank90":"25000",
            "price_bank90_prepayment":"20000",

            "price_bank_instagram":"8500",
            "price_bank_bf_full":"8500",
            "price_bank_bf":"5950",
            "price_bank_discount":"6000",
            "price_bank_full":"21840",
            "example_phone":"+77123456789",
            "icarin_price_caps":"365",
            "icarin_price_caps_discount":"224",
            "icarin_price_caps_full":"730",
            "icarin_price_bank":"10970",
            "icarin_price_bank_discount":"10970",
            "icarin_price_bank_full":"21840",

            "tanadem_price_caps":"1649",
            "tanadem_price_caps_discount":"1649",
            "tanadem_price_caps_full":"3300",

            "tanadem_price_bank":"16490",
            "tanadem_price_bank_discount":"16490",
            "tanadem_price_bank_full":"32980"

        },
        "KG":{
            "currency":"сом",
            "currency_small":"с",

            "price_caps":"76",
            "price_caps_discount":"40",
            "price_caps_full":"152",

            "price_bank":"2275",
            "price_bank_prepayment":"2000",
            "price_bank60":"4000",
            "price_bank60_prepayment":"3000",
            "price_bank90":"5000",
            "price_bank90_prepayment":"4000",

            "price_bank_instagram":"1690",
            "price_bank_bf_full":"1690",
            "price_bank_bf":"1183",
            "price_bank_discount":"1000",
            "price_bank_full":"4550",
            "example_phone":"+996123456789",

            "icarin_price_caps":"76",
            "icarin_price_caps_discount":"40",
            "icarin_price_caps_full":"152",
            "icarin_price_bank":"2275",
            "icarin_price_bank_discount":"2275",
            "icarin_price_bank_full":"4550",

            "tanadem_price_caps":"359",
            "tanadem_price_caps_discount":"359",
            "tanadem_price_caps_full":"699",

            "tanadem_price_bank":"3590",
            "tanadem_price_bank_discount":"3590",
            "tanadem_price_bank_full":"7190"
        },
        "BY":{
            "currency":"руб",
            "currency_small":"р",
            "price_caps":"1.7",
            "price_caps_discount":"1.7",
            "price_caps_full":"3.4",
            "price_bank":"51",
            "price_bank_instagram":"51",
            "price_bank_discount":"51",
            "price_bank_full":"102",
            "example_phone":"+375291234567",

            "icarin_price_caps":"49",
            "icarin_price_caps_discount":"24",
            "icarin_price_caps_full":"98",
            "icarin_price_bank":"2290",
            "icarin_price_bank_discount":"2290",
            "icarin_price_bank_full":"3000",

            "tanadem_price_caps":"365",
            "tanadem_price_caps_discount":"224",
            "tanadem_price_caps_full":"730",

            "tanadem_price_bank":"10970",
            "tanadem_price_bank_discount":"10970",
            "tanadem_price_bank_full":"21840"
        }

    };

    $.ajax({
        type: "GET",
        url: "http://ipgeobase.ru:7020/geo/?ip=" + ip,
        dataType: "xml",
        success: function (xml) {
            country = $(xml).find('country').text();
            change_country(country);
        },
        error: function () {

        }
    });

    $('select[name=country]').change(function (e) {
        change_country($(this).val());
        e.preventDefault();
    });

    function change_country(country) {
        if (countries[country] === undefined) {
            country='RU';
        }

        $('.currency').html(countries[country].currency);
        $('.currency_small').html(countries[country].currency_small);


        $('.price_caps').html(countries[country].price_caps);
        $('.price_caps_discount').html(countries[country].price_caps_discount);
        $('.price_caps_full').html(countries[country].price_caps_full);
        $('.price_bank_prepayment').html(countries[country].price_bank_prepayment);
        $('.price_bank').html(countries[country].price_bank);
        $('.price_bank60_prepayment').html(countries[country].price_bank60_prepayment);
        $('.price_bank60').html(countries[country].price_bank60);
        $('.price_bank90_prepayment').html(countries[country].price_bank90_prepayment);
        $('.price_bank90').html(countries[country].price_bank90);
        $('.price_bank_instagram').html(countries[country].price_bank_instagram);
        $('.price_bank_discount').html(countries[country].price_bank_discount);
        $('.price_bank_full').html(countries[country].price_bank_full);
        $('.example_phone').html(countries[country].example_phone);
        $('.price_bank_bf_full').html(countries[country].price_bank_bf_full);
        $('.price_bank_bf').html(countries[country].price_bank_bf);



        $('.icarin_price_bank').html(countries[country].icarin_price_bank);
        $('.icarin_price_bank_full').html(countries[country].icarin_price_bank_full);
        $('.icarin_price_bank_discount').html(countries[country].icarin_price_bank_discount);

        $('.icarin_price_caps').html(countries[country].icarin_price_caps);
        $('.icarin_price_caps_full').html(countries[country].icarin_price_caps_full);
        $('.icarin_price_caps_discount').html(countries[country].icarin_price_caps_discount);

        $('.tanadem_price_bank').html(countries[country].tanadem_price_bank);
        $('.tanadem_price_bank_full').html(countries[country].tanadem_price_bank_full);
        $('.tanadem_price_bank_discount').html(countries[country].tanadem_price_bank_discount);

        $('.tanadem_price_caps').html(countries[country].tanadem_price_caps);
        $('.tanadem_price_caps_full').html(countries[country].tanadem_price_caps_full);
        $('.tanadem_price_caps_discount').html(countries[country].tanadem_price_caps_discount);

        $('select[name=country]').val(country);
    }
});