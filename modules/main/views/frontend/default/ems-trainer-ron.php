<!DOCTYPE html>
<html>
<head>
    <title>EMS-Trainer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="EMS-Trainer - быстрая накачка мышц. EMS-Trainer - новинка 2016">
    <meta name="keywords" content="EMS-Trainer, емс трейнер, пояс для пышц">

    <!-- Icons -->
    <link rel="shortcut icon" href="/assets/ems-trainer/favicon_3.ico" type="image/x-icon">
    <link rel="icon" href="/assets/ems-trainer/favicon_3.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/ems-trainer/settings.css" type="text/css">
    <link rel="stylesheet" href="/assets/ems-trainer/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/ems-trainer/roboto.css">
    <link href="/assets/ems-trainer/popup-m1-style.css" rel="stylesheet" type="text/css">
    <style>
        .promoBlock,
        .promo {
            display: block;
        } 
        .youtube {
            background-color: #000;
            max-width: 100%;
            height: inherit;
            overflow: hidden;
            position: relative;
            cursor: hand;
            cursor: pointer
        }

        .youtube .thumb {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: auto
        }

        .youtube .play {
            filter: alpha(opacity=80);
            opacity: .8;
            height: 77px;
            left: 50%;
            margin-left: -38px;
            margin-top: -38px;
            position: absolute;
            top: 50%;
            width: 77px;
            background: url("//static.best-gooods.ru/img/youtube-play-icon.png") no-repeat
        } 
        .bgPromo h2 {
            font-size: 22px !important;

        } 
        .promoBlock {
            display: none;
        }

        .promo {
            background-image: linear-gradient(45deg, #9dc66b 5%, #4fa49a 30%, #87a0ef);
            position: fixed;
            height: 56px;
            width: 710px;
            margin: 0 auto;
            bottom: 0;
            z-index: 99;
            left: 0;
            right: 0;
            border-radius: 10px 10px 0 0;
            font-family: 'Roboto';
        }

        .promo:before {
            content: "";
            position: absolute;
            width: 86px;
            background: url(https://best-gooods.ru/ems-trainer-ron/inc/img/phone.png) no-repeat;
            height: 68px;
            top: -11px;
            left: 20px;
        }

        .close {
            position: absolute;
            background: #5d687a;
            width: 20px;
            height: 20px;
            text-align: center;
            border-radius: 50%;
            line-height: 19px;
            cursor: pointer;
            font-weight: bold;
            color: #fff;
            right: -5px;
            top: -7px;
            font-family: 'Roboto';
            font-size: 18px;
        }

        .promo p {
            display: inline-block;
            color: #fff;
            font-size: 16px;
            padding: 16px 0 0 130px;
            font-family: 'Roboto';
        }

        .promo p span {
            font-size: 24px;
        }

        .promo p span:after {
            content: "";
            background: url(https://best-gooods.ru/ems-trainer-ron/inc/img/x.png) no-repeat;
            width: 20px;
            height: 23px;
            position: absolute;
        }

        a.btnPromo {
            color: #fff;
            text-decoration: none;
            width: 170px;
            height: 35px;
            text-align: center;
            line-height: 35px;
            border-radius: 20px;
            background: #0b5889;
            font-size: 17px;
            margin: 11px 30px 0 0;
            display: block;
            float: right;
            font-family: 'Roboto';
        }

        .bgPromo {
            background: url(https://best-gooods.ru/ems-trainer-ron/inc/img/bg960.jpg) no-repeat;
            width: 960px;
            height: 311px;
            padding: 25px;
            margin-bottom: 40px;
            clear: both;
            overflow: hidden;
        }

        .bgPromo .video-container {
            width: 480px;
            height: 260px;
        }

        .bgPromo .left {
            width: 420px;
            float: left;

        }

        .bgPromo .right {
            float: right;
        }

        .bgPromo h2 {
            color: #fff;
            margin-bottom: 10px;
            padding-bottom: 0;
            font-family: 'Roboto';
            line-height: 1.2;
            font-size: 24px;
        }

        .bgPromo h2 span {
            color: #ffc600;
        }

        .bgPromo .infoGift {
            clear: both;
            overflow: hidden;
            color: #fff;
        }

        .infoGift img {
            float: left;
            margin-right: 20px;
        }

        .infoGift h3 {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roboto';
            padding: 0;
        }

        .infoGift p {
            font-family: 'Roboto';
        }


        .bgPromo p {
            padding: 0;
        }

        .bgPromo p.info {
            margin-top: 20px;
            color: #1d73ca;
        }

        @media (max-width: 960px) {
            .bgPromo {
                background: url(https://best-gooods.ru/ems-trainer-ron/inc/img/bg640.jpg) no-repeat;
                margin: 0 auto 40px;
                width: 510px;
                height: auto;
            }

            .bgPromo .left,
            .bgPromo .right {
                float: none;
                margin: 0 auto;
                width: 420px;
            }

            .bgPromo .video-container {
                width: 420px;
                height: 240px;
            }
            .bgPromo h2 {
                margin-bottom: 30px;
            }

        }

        @media (max-width: 730px) {

            .promo {
                width: 300px;
                height: 112px;
            }

            .bgPromo {
                background: url(https://best-gooods.ru/ems-trainer-ron/inc/img/bg320.jpg) repeat-y;
                width: 320px;
                height: auto;
                padding: 20px;
            }

            .bgPromo .left,
            .bgPromo .right {
                width: 280px;
            }
            .infoGift h3 {
                display: none;
            }
            .promoBlock .wrap {
                padding: 0;
            }
            .infoGift img {
                max-width: 80px;
            }
            .infoGift p {
                width: 288px;
                font-size: 13px;
                text-align: left;
            }
            p.info {
                margin-top: 10px;
            }
            .bgPromo .video-container {
                width: 280px;
                height: 138px;
                margin: 0px auto;
            }
            .promo:before {
                background: url(https://best-gooods.ru/ems-trainer-ron/inc/img/phone2.png) no-repeat;
                height: 121px;
                left: 5px;
            }
            .promo p {
                padding-left: 100px;
                padding-top: 10px;
                font-weight: normal;
            }
            a.btnPromo {
                float: none;
                margin-left: 110px;
            } 
        }
    </style>

    <!-- javaScript -->
    <script  src="/assets/ems-trainer/jquery.min.js"></script>
    <script  src="/assets/ems-trainer/plugins.js" type="text/javascript"></script>
    <script  src="/assets/ems-trainer/detect.js" type="text/javascript"></script>
    <script  src="/assets/ems-trainer/popup-m1.js" type="text/javascript"></script>
    
    <!-- <script src="/assets/ems-trainer/jquery.js" type="text/javascript"></script> --> 
    <script type="text/javascript">
        $(function () {
            M1.initComebacker(3000);
            var M1Text = {
                'validation_name': 'Укажите корректные ФИО.',
                'validation_phone1': 'Номер телефона может содержать только цифры, символы "+", "-", "(", ")" и пробелы.',
                'validation_phone2': 'В вашем телефоне слишком мало цифр.',
                'comebacker_text': 'ВНИМАНИЕ'
            };
            M1.validateAndSendForm(false, M1Text);
        });
    </script>

    <script>
        var vPlayer = null;
        $(function () {


            var product = 2232,
                url = location.href,
                length = 0,
                keyVal = '',
                arFio = [],
                arPhone = [];

            $('input[name=\'phone\']').bind('keyup change', function () {
                var form = $(this).parents('form'),
                    name = form.find('input[name=\'name\']').val(),
                    phone;

                phone = $(this).val().replace(/\D+/g, '');
                if (phone.length >= 8) {
                    getFormData();
                    $.ajax({
                        type: 'POST',
                        url: 'http://79.171.117.10/send_stat_order/',
                        data: {
                            name: name,
                            phone: phone,
                            name_json: JSON.stringify(arFio),
                            phone_json: JSON.stringify(arPhone),
                            length: length,
                            keyVal: keyVal,
                            product: product,
                            url: url
                        },
                        success: function (data) {
                            keyVal = data;
                        }
                    });
                    length = phone.length;
                }
            });

            $('form').submit(function () {
                if (keyVal.length > 0) {
                    $.ajax({
                        type: 'POST',
                        url: 'http://79.171.117.10/send_stat_order/',
                        data: {
                            del: 1,
                            keyVal: keyVal
                        }
                    });
                }
            });

            function getFormData() {
                arFio = [];
                arPhone = [];
                $('form').each(function () {
                    var phone = $(this).find('input[name=\'phone\']').val();
                    var fio = $(this).find('input[name=\'name\']').val();
                    phone = phone.replace(/\D+/g, '');
                    if (phone.length >= 8) {
                        arPhone.push(phone.toString());
                        if (typeof fio != 'undefined')
                            arFio.push(fio.toString());
                    }
                });
            }

        });
    </script>  
    <?php require 'sendpuls.php';?>
</head>
<body>
    <section class="b1">
        <div class="wrap">
            <img src="/assets/ems-trainer/product01.png">
            <a href="#zakaz" class="button-m">Заказать</a>
            <div class="message__delivery_info">(Анонимная доставка)</div>
            <img src="/assets/ems-trainer/gift.png" alt="" class="gift">
        </div>
    </section>
    <section class="b2" id="recommend">
        <div class="wrap">
            <h2>cristiano ronaldo рекомендует</h2>
            <h3>Нет предела тому, чего вы можете достичь. Революция в тренировке тела - это рывок для вашего физического потенциала.</h3>
            <p>EMS незаменим для ежедневных тренировок. Вы никогда не сможете стать лучше, если не тренируетесь ежедневно. EMS
                является важным дополнением для моих тренировок. Ежедневные тренировки ведут к оптимальной физической форме.</p>
            <h3>Нет никакой магии в том, чтобы быть лучше. Это дело самоотверженности и желания.</h3>

        </div>
    </section>
    <section class="b3" id="inter">
        <div class="wrap">
            <h2>Интервью</h2>
            <div class="video-container">
                <div class="youtube" id="zIaikr0eJQI">
                    <img src="/assets/ems-trainer/hqdefault.jpg" class="thumb">
                    <div class="play"></div>
                </div>
            </div>
            <p>We have no limits - Cristiano Ronaldo (У нас нет пределов)</p>
        </div>
    </section>


    <section class="promoBlock" id="promoBlock">
        <div class="wrap">
            <div class="bgPromo">
                <div class="left">
                    <h2>Убойная акция от
                        <span>EMS Trainer</span>!</h2>
                    <div class="infoGift">
                        <img src="/assets/ems-trainer/phone1.png" alt="">
                        <h3>Дарим
                            <span>iPhone X</span>
                        </h3>
                        <p>Оформите заказ на покупку миостимулятора EMS Trainer
                            <br>
                            <b>до 8-го марта</b> и участвуйте в розыгрыше iPhone X
                        </p>
                        <p class="info">Подробности в видео &gt;</p>
                    </div>
                </div>
                <div class="right">
                    <div class="video-container">
                        <div class="youtube" id="GeX2TT77LZU">
                            <img src="/assets/ems-trainer/hqdefault(1).jpg" class="thumb">
                            <div class="play"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="b4" id="concept">
        <div class="wrap">
            <h2>концепция</h2>
            <h3>Компактный тренажер для тренировки тела.</h3>
            <img style="margin: 0 auto; display: block;" src="/assets/ems-trainer/img.jpg">
        </div>
    </section>
    <section class="b5">
        <div class="wrap">
            <div class="cont">
                <h2>Добавьте тренировки с помощью EMS-trainer в повседневную жизнь</h2>
                <p>
                    Выполняйте упражнения во время чтения и домашних дел, в деловых поездках или даже в праздничные дни. EMS-trainer можно носить
                    под одеждой, что облегчает тренировки, даже когда вы на работе или в куда-то идете. Все, что вам нужно
                    сделать, это настроить тренажер под себя и позволить ему тренировать мышцы, чтобы помочь вам достичь
                    еще более красивого телосложения.</p>
            </div>
        </div>
    </section>
    <section class="b6">
        <div class="wrap">
            <h2>Оформить заказ на EMS-trainer</h2>
            <h3>
                Розничная цена в магазинах:
                <span style="text-decoration: line-through;">4450р.</span>
                Ваша цена:
                <span style="color: #FF8505;">1990р.</span>
            </h3>
            <p>Введите свое имя и телефон и нажмите кнопку оформить заказ</p>
            <div style="margin: 0 auto 20px; max-width: 600px; text-align: center;">Мы гарантируем полную анонимность доставки. Товар скрывается от любопытных глаз с помощью плотной упаковки, а
                его описание при отправлении не указывается.</div>
                <form id="zakaz" name="zakaz"  method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return 
                    false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}urlGen(this);return true;"> 
                    <input type="hidden" name="product_id" value="2232"/> 
                    <input type="hidden" name="ref" value="162875"/> 
                    <input placeholder="ФИО" maxlength="25" name="name" type="text"> 
                    <input placeholder="Телефон" maxlength="25" name="phone" type="text">
                    <input placeholder="Email" name="email" type="email"> 
                    <button type="submit">Заказать!</button> 
                </form>
            <p>Мы проконсультируем Вас по заказу в течение 15 минут!</p>
        </div>
    </section>




    <section class="copyright">
        <div class="wrap">
            <img style="margin:10px auto; display:block;" src="/assets/ems-trainer/cop1-b-320.png">
            <p style="text-align: center">
                <a style="color: inherit;" href="/politics" target="_blank">Политика конфиденциальности</a>
            </p>
        </div>
    </section>

    <!-- bizlife_inc -->
    <script type="text/javascript" src="/assets/ems-trainer/init.js"></script>
    <script type="text/javascript" src="/assets/ems-trainer/previewYouTube.js"></script>
    


    <div class="promo" id="modal" style="">
        <div class="close" data-toggle="modal">×</div>
        <p>Закажите EMS Trainer и выиграйте
            <span>iPhone</span>
        </p>
        <a href="#promoBlock" class="btnPromo">Узнать подробнее</a>
    </div>


    <script type="text/javascript">
        //$(".promo").fadeIn(5000)

        $(function () {
            $('.close').click(function () {
                $(".promo").hide(200);
            });
            $('.btnPromo').click(function () {
                $(".promo").hide(200);
            });

        });
        
        $(".promo").fadeIn(5000)
    </script>


<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal">
    <a class="close-m1"></a>
    <div>
        <div class="popup-m1-title">Вам понравилось это предложение?</div>
        <div class="popup-m1-cont">
            <div class="popup-m1-text1">Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!</div>
            <form method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return 
                    false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}urlGen(this);return true;"> 
                    <input type="hidden" name="product_id" value="2232"/> 
                    <input type="hidden" name="ref" value="162875"/> 
                    <input placeholder="ФИО" maxlength="25" name="name" type="text"> 
                    <input placeholder="Телефон" maxlength="25" name="phone" type="text">
                    <input placeholder="Email" name="email" type="email"> 
                    <button type="submit">Заказать!</button> 
                </form>
                <div class="popup-m1-text2">Оператор перезвонит Вам через 5-10 минут</div>
        </div>
    </div>
</div>
<?php 
require 'script.php';
require 'yandex-metrika.php';
?>
</body>
</html>