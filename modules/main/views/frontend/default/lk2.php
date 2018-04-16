<?php
$request = Yii::$app->request;  
$lk = $request->get("lk","0");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Спецпредложение от нашего интернет-магазина, товары по супер цене! Скидки до 80%.</title>
    <noscript><meta http-equiv="refresh"content="0; url=/"></noscript>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https:/assets/lk2/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https:/assets/lk2/favicon.ico" type="image/x-icon">
    <link href="/assets/lk2/css.css" rel="stylesheet" >
    <link media="all" href="/assets/lk2/main.css" rel="stylesheet">
    <link media="all" href="/assets/lk2/hint.css" rel="stylesheet">
    <script src="/assets/lk2/jquery.min.js"></script>
    <script src="/assets/lk2/jquery.placeholder.js"></script>
    <script src="/assets/lk2/init.js"></script> 
    <script> 
        function get(name){
        if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
            return decodeURIComponent(name[1]);
        }
    </script> 
    <link rel="stylesheet" type="text/css" href="/assets/lk2/roboto.css">
    <script src="/assets/lk2/jquery.js" type="text/javascript"></script>
    <script src="/assets/lk2/plugins.js" type="text/javascript"></script> 
    <script src="/assets/lk2/detect.js" type="text/javascript"></script> 
    <?php require 'sendpuls.php';?>
</head>
<body class="man" style="background-color: #474b68;"> 
    <style>
        .man .block-1 .top-title>div {
            background: url(/assets/lk2/img/phone-icon-2-lighter.png) center bottom no-repeat;
        }

        .dashed_frame {
            border: 1px dashed grey;
            border-radius: 10px;
            opacity: 1;
            background: none;
            top: 0;
            height: auto;
            padding: 15px 20px;
            width: 90%;
            margin-bottom: 20px;
        }

        .dashed_frame h2 {
            font-weight: 900;
            text-align: center;
            text-transform: uppercase;
        }

        .present {
            background-color: #eff2fa;
            border-radius: 10px;
            padding: 20px !important;
            height: 510px !important;
            border: 1px solid #e2dfe9;
        }

        .offer-head {
            left: -40px;
            position: relative;
        }

        .mail-box .head {
            font-family: sans-serif;
            font-size: 18px;
            font-style: italic;
            text-align: center;
            margin: 20px 0;
        }

        .mail-box .email_ss_holder {
            float: none;
            width: 100%;
            padding: 45px 10px 15px;
            text-align: center;
        }

        .mail-box .email_cc_input {
            border: 1px solid #dcdada;
            background-color: rgba(204, 204, 204, 0.16);
            width: 258px;
            color: #000;
        }

        .mail-box .btn_ss_holder {
            float: none;
            margin: 0;
            width: 100%;
            text-align: center;
        }

        .mail-box .desc_cc_desc {
            margin: 45px 0px 0;
            color: #7b7b7b;
            font-size: 14px;
        }

        .present-descr {
            width: 58%;
            float: left;
        }

        .present1 {
            float: left;
            text-align: center;
            width: 30%;
            margin: 0 5px;
        }

        .present1.last:after {
            clear: both;
        }

        .mail-box {
            background: url("/assets/lk2/img/mail-box.png") center top no-repeat;
            width: 42%;
            float: left;
            padding: 1px 45px;
            height: 375px;
        }

        .tov-gal-big {
            margin-top: 45px !important;
            border: 1px solid lightgrey;
        }

        .tov-gal-list {
            margin-top: 45px !important;
        }

        .tov-left-cont {
            width: 420px !important;
        }

        .thanks {
            margin: 43% auto;
            font-size: 28px;
            text-align: center;
            line-height: 36px
        }

        .thanks span {
            font-size: 20px;
        }

        @media (max-width: 960px) {
            .mail-box,
            .present-descr {
                float: none;
                width: 100%;
            }
            .present {
                height: 100% !important;
            }
            .present-descr {
                height: 375px;
            }
            .offer-head {
                left: -40px;
            }
            .thanks {
                width: 55%;
                margin: 25% auto;
            }
        }

        @media (max-width: 640px) {
            .present1 {
                margin: 0 3px;
            }
            .present,
            .mail-box .head,
            .mail-box .desc_cc_desc {
                font-size: 80%;
            }
            .present-descr {
                height: 300px;
            }
            .mail-box .email_ss_holder {
                padding: 45px 0 15px;
            }
            .mail-box .email_cc_input {
                width: 100%;
            }
            .mail-box {
                height: 330px;
                background-size: contain;
            }
            .mail-box .head {
                margin: 15px 0;
            }
            .top-title-c {
                top: 0 !important;
            }
            .thanks {
                font-size: 18px;
                line-height: 30px;
                width: 100%;
                margin: 55% auto;
            }
            .thanks span {
                font-size: 14px;
            }
        }
    </style>

    <input type="hidden" id="fio_for_collector_page" value="вася">


    <div class="section block-1" style="background: #f1f4f6 url(/assets/lk2/img/top-bg-purple.png) center top no-repeat; margin-top: 0px;">
        <div class="wrap" style="height:180px;">
            <div class="top-title top-title-c" style="text-align: center;padding: 30px 0;">
            <?php if($lk != "0")
            echo "<h2 style=\"color: #55d90d;\">Ваш заказ (№ $lk) принят!</h2>";
            else echo '<h2 style="color: #55d90d;">Спасибо. Ваш заказ принят!</h2>';?>
                <div style="color: white;">Наш оператор свяжется с вами в течение 30&nbsp;минут</div>
            </div>
        </div>
        <div class="wrap present iphone-act clearfix" style="height: auto !important;">
            <div class="iphone-title">Розыгрыш
                <strong>iPhone X</strong>
            </div>
            <img class="iphone-pic" src="/assets/lk2/iphonex.jpg" alt="">
            <div class="iphone-content">
                <p>Прямой эфир розыгрыша состоится
                    <strong>18‑го&nbsp;марта в 19:00</strong> (время&nbsp;МСК)</p>
                <p>Группа розыгрыша в социальной сети Вконтакте:</p>
                <a href="https://vk.com/clubiphonex">vk.com/clubiphonex</a>
            </div>
        </div>
    </div>

    <div style="background-color: #f1f4f6; margin: auto; text-align: center; padding-top: 30px; font-size: 28px; font-family: inherit; padding-bottom: 10px;">
        Вы можете добавить этот товар с
        <b>огромной</b> скидкой!
    </div>

    <div class="section block-3">
        <div class="wrap" style="padding-top: 20px; !important">
            <div class="tov-item tov-rate-2 clearfix">
                <!--rating 4,5-->
                <span class="tov-item-sale">-44%</span>

                <div class="tov-left-cont">
                    <div class="tov-gal clearfix">
                        <div class="tov-gal-big">
                            <img src="https://ems-trainer-ron.tk/assets/ems-trainer/img/b2.jpg" class="image0" alt="">
                        </div>
                        <!-- <div class="tov-gal-list">
                            <span class="active animate" data-target=".image0">
                                <img src="/assets/lk2/f14af3eea633b1b57a8b0960c9f6d14a.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image0">
                                <img src="/assets/lk2/856e7b08111a92474ea667633b4023c9.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image0">
                                <img src="/assets/lk2/cae114d09ac96d3a80d2d7a47ad8fd34.jpeg" alt="">
                            </span>
                        </div> -->
                    </div>
                    <!-- <ul class="tov-adv clearfix">
                        <li class="hint hint--top  hint--info" data-hint="Гарантия возврата 14 дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Оплата товара при получении"></li>
                    </ul> -->
                </div>
                <div class="tov-info">
                    <h3>Тренажер EMS - Trainer 1990 р</h3>

                    <div class="tov-info-rate"></div>
                    <div class="tov-info-cost">
                        <span class="old-cost">4450
                            <small>р</small>
                        </span>
                        <span class="new-cost">1990
                            <small>р</small>
                        </span>
                    </div>
                    <p class="tov-info-text">EMS - Trainer- новый тренажер последнего поколения, который совмещает в себе множество функций, запатентованная
                        форма в сочетании. С оптимальной частотой 20 гц дает непревзойденные результаты -позволяет направленно
                        воздействовать на мышцы без необходимости мозгу отдавать сигналы</p>
                    
                    <form name="zakaz" method="post"> 
                        <input type="hidden" name="product_id" value="2232"/> 
                        <input type="hidden" name="ref" value="162875"/>
                        <button class="tov-button animate" type="submit">Добавить к заказу!</button>
                    </form>
                </div>
            </div>


              
            <div class="tov-item tov-rate-1 clearfix">
                <!--rating 4,5-->
                <span class="tov-item-sale">-95%</span>

                <div class="tov-left-cont">
                    <div class="tov-gal clearfix">
                        <div class="tov-gal-big">
                            <img src="https://198-fatcap5.tk/assets/198-fatcap5/top.jpg" class="image3" style="max-height: 400px;" alt="">
                        </div>
                        <!-- <div class="tov-gal-list">
                            <span class="active animate" data-target=".image3">
                                <img src="/assets/lk2/0f6047f97f8aca2bb180277bd6a0b399.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image3">
                                <img src="/assets/lk2/7c7aab58a142750e61613850d70ea0d9.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image3">
                                <img src="/assets/lk2/9c12376bb08b2422d4852d7f3405e820.jpeg" alt="">
                            </span>
                        </div> -->
                    </div>
                    <ul class="tov-adv clearfix">
                        <li class="hint hint--top  hint--info" data-hint="Гарантия возврата 14 дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Оплата товара при получении"></li>
                    </ul>
                </div>
                <div class="tov-info">
                    <h3> Guarchibao FatCap</h3>

                    <div class="tov-info-rate"></div>
                    <div class="tov-info-cost">
                        <span class="old-cost">2110
                            <small>р</small>
                        </span>
                        <span class="new-cost">198
                            <small>р</small>
                        </span>
                    </div>
                    <p class="tov-info-text">Программа корректировки веса Guarchibao FatCap со скидкой и доставкой по СНГ</p>
                    <form name="zakaz" method="post"> 
                        <input type="hidden" name="product_id" value="3941"/> 
                        <input type="hidden" name="ref" value="162875"/>
                        <button class="tov-button animate" type="submit">Добавить к заказу!</button>
                    </form>
                </div>
            </div>
            <div class="tov-item tov-rate-1 clearfix">
                <!--rating 4,5-->
                <span class="tov-item-sale">-47%</span>

                <div class="tov-left-cont">
                    <div class="tov-gal clearfix">
                        <div class="tov-gal-big">
                            <img src="https://ecoslim-inst.tk/assets/ecoslim-inst/img/1.jpg" class="image4" alt="">
                        </div>
                        <!-- <div class="tov-gal-list">
                            <span class="active animate" data-target=".image4">
                                <img src="/assets/lk2/0302173232569c95d68f53f56539fa82.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image4">
                                <img src="/assets/lk2/ec1c0d199fd46819bc0646e6c4454bbc.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image4">
                                <img src="/assets/lk2/c06bcf66c548cdcbcda71969d99795b4.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image4">
                                <img src="/assets/lk2/a8aea7384793a22a36b62753004b84fb.jpeg" alt="">
                            </span>
                        </div> -->
                    </div>
                    <ul class="tov-adv clearfix">
                        <li class="hint hint--top  hint--info" data-hint="Гарантия возврата 14 дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Оплата товара при получении"></li>
                    </ul>
                </div>
                <div class="tov-info">
                    <h3>Eco Slim для похудения</h3>

                    <div class="tov-info-rate"></div>
                    <div class="tov-info-cost">
                        <span class="old-cost">2100
                            <small>р</small>
                        </span>
                        <span class="new-cost">990
                            <small>р</small>
                        </span>
                    </div>
                    <p class="tov-info-text">"Eco Slim - это 100% натуральный и экологически чистый продукт. Никакой химии и искусственно синтезированных
                веществ!
                    </p>
                    <form name="zakaz" method="post"> 
                        <input type="hidden" name="product_id" value="1613"/> 
                        <input type="hidden" name="ref" value="162875"/>
                        <button class="tov-button animate" type="submit">Добавить к заказу!</button>
                    </form>
                </div>
            </div>
            <div class="tov-item tov-rate-1 clearfix">
                <!--rating 4,5-->
                <span class="tov-item-sale">-99%</span>

                <div class="tov-left-cont">
                    <div class="tov-gal clearfix">
                        <div class="tov-gal-big">
                            <img src="https://fire-fit-one9.tk/assets/fire-fit-one9/img/sec1_bg.jpg" class="image5" alt="">
                        </div>
                        <!-- <div class="tov-gal-list">
                            <span class="active animate" data-target=".image5">
                                <img src="/assets/lk2/1b977227facec591608717810e03f96b.jpeg" alt="">
                            </span>
                            <span class="animate" data-target=".image5">
                                <img src="/assets/lk2/fcd44b85421f21e55c22e6333be217c8.jpeg" alt="">
                            </span>
                        </div> -->
                    </div>
                    <ul class="tov-adv clearfix">
                        <li class="hint hint--top  hint--info" data-hint="Гарантия возврата 14 дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
                        <li class="hint hint--top  hint--info" data-hint="Оплата товара при получении"></li>
                    </ul>
                </div>
                <div class="tov-info">
                    <h3>Fire Fit - это легкий способ сделать своё тело идеальным</h3>

                    <div class="tov-info-rate"></div>
                    <div class="tov-info-cost">
                        <span class="old-cost">2190
                            <small>р</small>
                        </span>
                        <span class="new-cost">1*
                            <small>р</small>
                        </span>
                    </div>
                    <p class="tov-info-text">Благодаря своим натуральным компонентам, Fire Fit позволяет легко худеть на 5 − 8 кг в месяц, то есть на − 10-16 кг за 2 месяца. Fire Fit признан совершенно безопасным, что означает отсутствие побочных эффектов. Эффективность препарата доказана исследованиями и одобрена клиентами. Fire Fit - это натуральный и безопасный продукт, который я рекомендую всем, кто решил избавиться от лишнего веса.</p>
                    <form name="zakaz" method="post"> 
                        <input type="hidden" name="product_id" value="3197"/> 
                        <input type="hidden" name="ref" value="162875"/>
                        <button class="tov-button animate" type="submit">Добавить к заказу!</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="section footer">
        <div class="wrap clearfix">
            <div class="left clearfix foot-logo">
                <p>
                    <b>Интернет-магазин «TOP-Shop»</b>
                    <br>
                    <span>Дарим покупателям радость с 2009 года.</span>
                </p>
            </div>
            <div class="right">
                <p>Copyright (c) 2016
                    <br>ОГРН 34582345720962</p>
            </div>
        </div>
    </div>
 
    <?php 
require 'script_all.php';
require 'yandex-metrika.php';
?>
</body> 
</html>