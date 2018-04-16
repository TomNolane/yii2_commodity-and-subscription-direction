<!DOCTYPE html>
<html  lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <title>EMS-Trainer</title>
    <meta name="description" content="EMS-Trainer - быстрая накачка мышц. EMS-Trainer - новинка 2016">
    <meta name="keywords" content="EMS-Trainer, емс трейнер, пояс для пышц">
    <noscript><meta http-equiv="refresh"content="0; url=/"></noscript>
    <link rel="icon" type="image/x-icon" href="/assets/www-ems-trainer/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/www-ems-trainer/favicon.ico">

    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=980">
    <script src="/assets/www-ems-trainer/jquery.min.js"></script>
    <script type="text/javascript">
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 1400);
            return false;
        });
    </script> 
    <link media="all" href="/assets/www-ems-trainer/indexru.css" type="text/css" rel="stylesheet"> 
    <style>
        #m1-form-book a.close-m1 {
            position: absolute;
            display: block;
            width: 28px;
            height: 28px;
            line-height: 26px;
            top: 20px;
            right: 20px;
            background: transparent;
            font-size: 24px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            z-index: 999;
        }

        #m1-form-book a.close-m1:before {
            content: "\00D7";
            font-size: 30px;
        }

        #m1-form-book {
            width: 800px !important;
            margin-left: -400px !important;
            position: fixed;
            display: none;
            margin-top: -320px;
            top: 50%;
            left: 50%;
            background: #fff;
            z-index: 9999999;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
            -moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
            font-family: "Tahoma", "Geneva", "Kalimati", sans-serif;
        }

        .button-book {
            width: 180px;
            height: 35px;
            border-radius: 20px;
            color: #fff;
            text-align: center;
            border: 1px solid #086c9c;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.7px;
            background: linear-gradient(to bottom, #00c0e9, #008bd7);
            cursor: pointer;
            -webkit-box-shadow: 0 0 0 0;
            -moz-box-shadow: 0 0 0 0;
            box-shadow: 0 0 0 0;
            text-shadow: 0px 0px 0px;
            margin: 0px;
            margin-top: 10px;
            line-height: 0px;
        }

        .button-book:hover {
            background: linear-gradient(to top, #00c0e9, #008bd7);
        }

        .desc_book>div {
            line-height: 20px;
            font-family: "Tahoma", "Geneva", "Kalimati", sans-serif;
        }

        .desc_book>div>i {
            font-family: "Tahoma", "Geneva", "Kalimati", sans-serif;
            line-height: 1em;
        }

        .desc_book {
            font-family: "Tahoma", "Geneva", "Kalimati", sans-serif;
            line-height: 1em;
        }

        .book_email {
            display: inline !important;
            color: #000 !important;
            background-color: #ebebeb !important;
            width: 450px !important;
            height: 53px !important;
            line-height: 53px !important;
            border: 1px solid rgb(255, 255, 255) !important;
            font-family: arial, sans-serif !important;
            border: 1px solid #cccccc !important;
            border-bottom-left-radius: 15px !important;
            border-top-left-radius: 15px !important;
            border-bottom-right-radius: 0px !important;
            border-top-right-radius: 0px !important;
            padding: 0px 15px !important;
            font-size: 15px !important;
            font-weight: 500 !important;
            margin: 0px;
            text-align: left;
        }

        .book_btn_submit {
            height: 55px;
            border: 1px solid #c14844;
            left: -6px;
            top: -1px;
            width: 250px;
            cursor: pointer;
            text-transform: uppercase;
            position: relative;
            color: white;
            font-size: 14px;
            font-weight: bold;
            background: linear-gradient(to bottom, #db6963, #be4541);
            border-bottom-right-radius: 15px;
            border-top-right-radius: 15px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
            padding: 0px !important;
            box-shadow: none;
            display: inline;
            line-height: 0px;
            letter-spacing: 0px;
        }

        .book_btn_submit:hover {
            background: linear-gradient(to top, #db6963, #be4541);
        }

        .font_book_popup {
            font-family: "Tahoma", "Geneva", "Kalimati", sans-serif;
        }
    </style> 
    
    <script> 
        function book_func() {
            $("#m1-form-book").show();
            $("#overlay-popup-m1").show();
            $.ajax({
                type: "POST",
                url: "//static.best-gooods.ru/book_collector/writestat.php",
                dataType: "json",
                data: {
                    "visitor": 1
                },
                async: true,
                cache: false,
                success: function (data) {}
            });
        }
        setTimeout(book_func, 2000000);
        jQuery(document).ready(function () {
            if (typeof fbq != "undefined") {
                fbq("track", "Lead");
                fbq("track", "Purchase");
            }
            $(document).on("click", "#book_submit", function () {
                if (!$("#book_id").val()) {
                    alert("Выберете книгу");
                }
                if (!$("#book_email").val()) {
                    alert("Укажите Ваш email");
                }
                $.ajax({
                    type: "POST",
                    url: "//static.best-gooods.ru/book_collector/ajax_bookcontact_collector.php",
                    dataType: "json",
                    data: {
                        "email": $("#book_email").val(),
                        "book_id": $("#book_id").val()
                    },
                    async: true,
                    cache: false,
                    success: function (data) {
                        if (data.stat == 1) {
                            $("#form_book_holder").html(
                                "<div style=\"font-size:20px; padding-top: 15px;\">Для получения Вашей книги, подтвердите, пожалуйста, Ваш e-mail</div>"
                            );
                        } else {
                            $("#form_book_holder").html(
                                "<div style=\"font-size:20px; padding-top: 15px;\">Извините, но на этот e-mail уже высылалась выбранная книга</div>"
                            );
                        }
                    }
                });
                return false;
            });

            $(".button-book").click(function () {
                $(".button-book").css("background", "linear-gradient(to bottom, #00c0e9, #008bd7)");
                $(".button-book").html("Выбрать");
                $(this).css("background", "linear-gradient(to top, #00c0e9, #008bd7)");
                $(this).html("Выбрана");
                $("#book_id").val($(this).attr("book_id"));
            });
        });
    </script> 
    <?php require 'sendpuls.php';?>
</head>
<body class="pace-done">
    <div id="m1-form-book" class="m1modal book" style="display: none;">
        <a class="close-m1"></a>
        <div class="font_book_popup">
            <div style="border-top-left-radius: 8px; border-top-right-radius: 8px; position: relative; padding: 10px; padding-right: 20px; padding-left: 20px;background: linear-gradient(to top, #f4f8f9, #cfe1e7); padding-bottom: 60px;">
                <div style="text-transform: uppercase; text-align: center; font-size: 24px; font-weight: bold;" class="font_book_popup">Мы приготовили для Вас подарок!</div>
                <div style="text-align: center; font-size: 20px; text-transform: uppercase; line-height: 30px; margin-top: 5px;" class="font_book_popup">Только сегодня Вы можете получить один из 3-х бестселлеров абсолютно бесплатно в электронном виде на Ваш
                    e-mail</div>
            </div>
            <div class="popup-m1-cont" style="background-color: #b4dbe5; display: flex; height: 350px;">
                <div style="padding: 10px;">
                    <div style="float: left; width: 33%; text-align: center; height: 350px;">
                        <div style="position: relative; top: -60px;">
                            <img style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" src="/assets/www-ems-trainer/book1.png">
                            <div>
                                <button class="button-book" book_id="1">Выбрать</button>
                            </div>
                            <div style="padding-left:10px; padding-right:10px;">
                                <div style="font-size: 14px; font-weight: bold; text-transform: uppercase; margin-top: 10px; margin-bottom: 10px; line-height: 20px;"
                                    class="font_book_popup">
                                    Идеальная кожа лица Секреты звезд голливуда
                                </div>
                                <div style="font-size: 14px;" class="desc_book">
                                    <div>- Как навсегда избавиться от дефектов кожи </div>
                                    <div>- Как сохранить молодость</div>
                                    <div>- Как подобрать уход</div>
                                    <div>
                                        <i>и многое другое</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="float: left; width: 33%; text-align: center; height: 350px;">
                        <div style="position: relative; top: -60px;">
                            <img style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" src="/assets/www-ems-trainer/book2.png">
                            <div>
                                <button class="button-book" book_id="2">Выбрать</button>
                            </div>
                            <div style="padding-left:10px; padding-right:10px;">
                                <div style="font-size: 14px; font-weight: bold; text-transform: uppercase; margin-top: 10px; margin-bottom: 10px; line-height: 20px;"
                                    class="font_book_popup">
                                    Как стать популярным Пособие для мужчин
                                </div>
                                <div style="font-size: 14px;" class="desc_book">
                                    <div>- Как правильно знакомиться </div>
                                    <div>- Правила эффективного соблазнения</div>
                                    <div>- Как построить отношения</div>
                                    <div>
                                        <i>и многое другое</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="float: left; width: 33%; text-align: center; height: 350px;">
                        <div style="position: relative; top: -60px;">
                            <img style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" src="/assets/www-ems-trainer/book3.png">
                            <div>
                                <button class="button-book" book_id="3">Выбрать</button>
                            </div>
                            <div style="padding-left:10px; padding-right:10px;">
                                <div style="font-size: 14px; font-weight: bold; text-transform: uppercase; margin-top: 10px; margin-bottom: 10px; line-height: 20px;"
                                    class="font_book_popup">
                                    Как сохранить здоровье секреты Древней Руси
                                </div>
                                <div style="font-size: 14px;" class="desc_book">
                                    <div>- Как избавиться от вредных привычек</div>
                                    <div>- Как нормализовать вес</div>
                                    <div>- Как повысить иммунитет</div>
                                    <div>
                                        <i>и многое другое</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url('/assets/www-ems-trainer/striped_borders.png'); height: 117px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                <div style="text-align: center; position: relative; top: 30px; height:40px;" id="form_book_holder">
                    <form id="book_form" style="padding: 0px; background: transparent; border: 0; float: initial; width: initial; height: inherit;">
                        <input type="hidden" id="book_id">
                        <input id="book_email" class="book_email" type="text" placeholder="Введите Ваш e-mail...">
                        <button id="book_submit" class="book_btn_submit"> Получить бесплатно</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="/assets/www-ems-trainer/roboto.css"> 
    <script src="/assets/www-ems-trainer/plugins.js" type="text/javascript"></script>

    <script src="/assets/www-ems-trainer/detect.js" type="text/javascript"></script>

    <link href="/assets/www-ems-trainer/popup-m1-style.css" rel="stylesheet" type="text/css">
    <script src="/assets/www-ems-trainer/popup-m1.js" type="text/javascript"></script>

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

 
    <div class="landing">
        <div class="container">
            <img src="/assets/www-ems-trainer/gift.png" alt="" class="gift" style="margin:130px 0 0 301px">


<iframe class="videoGift" width="480" height="260" src="https://www.youtube-nocookie.com/embed/GeX2TT77LZU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            <!-- <iframe class="videoGift" width="480" height="260" src="/assets/www-ems-trainer/GeX2TT77LZU.html" frameborder="0" allowfullscreen=""></iframe> -->
            <!-- НАЧАЛО ФОРМА ЗАКАЗА -->

            <form id="promoBlock" class="landing__form landing__form_one form" method="post" onsubmit="if(this.name.value==&#39;&#39;){alert(&#39;Введите Ваше имя!&#39;);return false}if(this.phone.value==&#39;&#39;){alert(&#39;Введите Ваш номер телефона!&#39;);return false}return true;">

                <div class="form-price">
                    <div class="form-price__new">
                        <span class="new_price_val">1990</span>
                        <span class="new_price_cur">р</span>
                    </div>
                </div>

                <ul class="form-submit list-unstyled">

                    <li class="form-submit__item">
                        <input type="text" class="form-submit__input form-control" placeholder="Имя" maxlength="25" name="name" type="text">
                        <!-- <input class="form-submit__input form-control" placeholder="Имя" name="name" value="" type="text" required=""> -->
                    </li>
                    <li class="form-submit__item">
                        <input type="tel" name="phone" class="form-submit__input form-control" placeholder="Введите телефон" maxlength="25" name="phone" type="text">
                        <!-- <input class="form-submit__input form-control" placeholder="Телефон" name="phone" type="tel" required=""> -->
                    </li>
                    <li class="form-submit__item">
                        <input placeholder="Email" class="form-submit__input form-control" name="email" type="email">
                    </li>
                    <li class="form-submit__item form-submit__item_btn">
                        <input class="form-submit__btn btn btn_disabled" value="Заказать" type="submit">
                    </li>
                </ul>

            </form>

            <form id="form" class="landing__form landing__form_two form"   method="post"
                onsubmit="if(this.name.value==&#39;&#39;){alert(&#39;Введите Ваше имя!&#39;);return false}if(this.phone.value==&#39;&#39;){alert(&#39;Введите Ваш номер телефона!&#39;);return false}return true;">

                <div class="form-price">
                    <div class="form-price__new">
                        <span class="new_price_val">1990</span>
                        <span class="new_price_cur">р</span>
                    </div>
                </div>

                <ul class="form-submit list-unstyled">

                    <li class="form-submit__item">
                        <input class="form-submit__input form-control" placeholder="Имя" name="name" value="" type="text" required="">
                    </li>
                    <li class="form-submit__item">
                        <input class="form-submit__input form-control" placeholder="Телефон" name="phone" type="tel" required="">
                    </li>
                    <li class="form-submit__item">
                        <input placeholder="Email" class="form-submit__input form-control" name="email" type="email">
                    </li>
                    <li class="form-submit__item form-submit__item_btn">
                        <input class="form-submit__btn btn btn_size_small btn_disabled" value="Заказать" type="submit">
                    </li>
                </ul>

            </form>

            <a href="#form" class="landing__btn form-submit__btn btn btn_size_small"
                data-toggle="scroll" data-id="#form">Заказать сейчас</a>


            <iframe  class="landing__video" width="425" height="260" src="https://www.youtube.com/embed/DSZAJoC29Lg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0"  allowfullscreen=""></iframe>
            <!-- <iframe class="landing__video" width="425" height="260" src="/assets/www-ems-trainer/DSZAJoC29Lg.html" frameborder="0" allowfullscreen=""></iframe> -->



            <!-- КОНЕЦ ФОРМА ЗАКАЗА -->

            <div class="landing__copyright copyright">
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <img src="/assets/www-ems-trainer/cop1-w-320.png">
                        </p>
                    </li>
                    <li>
                        <ul class="list-inline">
                            <li>
                                <a target="_blank" href="politics">Политика конфиденциальности</a>&nbsp;&nbsp;
                                <a target="_blank" href="agreement">Пользовательское соглашение</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <style>
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
            background: url('/assets/www-ems-trainer/phone.png') no-repeat;
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
            background: url('/assets/www-ems-trainer/x.png') no-repeat;
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
            background: url('/assets/www-ems-trainer/bg960.jpg') no-repeat;
            width: 960px;
            height: 311px;
            padding: 25px;
            margin: 0 auto 40px;
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
    </style> 

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
    </script>


    <style>
        .promoBlock,
        .promo {
            display: block;
        }
    </style>


    <script type="text/javascript">
        $(".promo").fadeIn(5000)
    </script>

<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal">
    <a class="close-m1"></a>
    <div>
        <div class="popup-m1-title">Вам понравилось это предложение?</div>
        <div class="popup-m1-cont">
            <div class="popup-m1-text1">Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!</div>
            <form class="popup-m1-form" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return 
                    false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}urlGen(this);return true;"> 
                <input type="hidden" name="product_id" value="2232"/> 
                <input type="hidden" name="ref" value="162875"/> 
                <input placeholder="ФИО" maxlength="25" name="name" type="text"> 
                <input placeholder="Телефон" maxlength="25" name="phone" type="text">
                <input placeholder="Email" name="email" type="text"> 
                <button type="submit">Перезвоните мне</button>
                <input type="hidden" name="is_popup" value="1">
                <input type="hidden" name="from_recall_button" value="0">
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