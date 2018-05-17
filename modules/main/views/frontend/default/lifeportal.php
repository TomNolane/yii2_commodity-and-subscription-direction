<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/assets/lol-surprise-lp/favicon.png">
    <title>Best free video online!</title>
<!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="/assets/lol-surprise-lp/Font-Awesome-4.7/css/font-awesome.min.css">          
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/lol-surprise-lp/css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="/assets/lol-surprise-lp/css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="/assets/lol-surprise-lp/css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="/assets/lol-surprise-lp/css/templatemo-style.css">                                   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- These two JS are loaded at the top for gray scale including the loader. -->

        <script src="/assets/lol-surprise-lp/js/jquery-1.11.3.min.js"></script>
        <!-- jQuery (https://jquery.com/download/) -->

        <script>
		
            var tm_gray_site = false;
            
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
        </script>
        <style>
        .cd-hero-slider .selected .cd-full-width h2.tm-figure-title {
            font-size: 17px;
        }
        .mfp-iframe-scaler iframe {
             box-shadow: 0 0 0px rgba(0, 0, 0, 0.6) !important;
        }
        .mfp-title {
            position:absolute;
            color: #000000;
            background: #FFFFFF;
            width: 100%;
            padding: 20px;
            }
        footer {
            display: none;
        }
        </style>
        <?php 
        // counts
       echo $model['facebook'];
       echo $model['senpuls'];
       echo $model['google_analytics'];
       echo $model['metrika'];
    ?>
</head>

    <body>
    <?php 
// advertising
echo $model['adsense']; 
echo $model['yandex_rtb'];
?>
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="#"><img src="/assets/lol-surprise-lp/favicon.png" class="img-fluid" alt="Lifeportal.ml">Lifeportal.ml</a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#0" data-no="1">Main page <span class="sr-only">(current)</span></a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="2">Films</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="3">Cartoons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="4">Music video</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="5">Контакты</a>
                                </li> -->
                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 

            <ul class="cd-hero-slider">
            
                <!-- Главная -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery"> 
                                <div class="tm-about-page">
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                                <h2 class="tm-text-title">More than 1000 movies and cartoons on our website</h2>
                                                <p class="tm-text">Welcome to this site! On this site you will find a lot of movies, cartoons and other videos (new, popular, old, favorite) for every taste. Absolutely free and without any registration! It is enough to go to our file Cabinet and enjoy watching.</p>
                                                <p class="tm-text">Our filing Cabinet:<br>
                                                <a href="#" id="a_1">Films</a><br>
                                                <a href="#" id="a_2">Cartoons</a><br>
                                                <a href="#" id="a_3">Music video</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>  
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>

                

                <!-- Фильмы-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-4">
                                <?php
                                    $temp = 0;
                                    foreach($model3 as $key)
                                    {
                                        if($temp == 300) break;
                                        if($key['category'] == "films")
                                        {
                                            if( $key['description'] != "empty")
                                            {
                                                $h = preg_replace('/<h1[^>]*?>([\\s\\S]*?)<\/h1>/','\\1', $key['description']);
                                          
                                                $h = preg_replace('/<a[^>]*?>([\\s\\S]*?)<\/a>/','\\1', $h);
                                                $h = preg_replace('/<\/a>/','\\1', $h);
                                                $h = preg_replace('/<b[^>]*?>([\\s\\S]*?)<\/b>/','\\1', $h);
                                                $h = preg_replace('/<div[^>]*?>([\\s\\S]*?)<\/div>/','\\1', $h);
                                                $h = preg_replace('/<span[^>]*?>([\\s\\S]*?)<\/span>/','\\1', $h);
                                                $h = preg_replace('/<i[^>]*?>([\\s\\S]*?)<\/i>/','\\1', $h);
                                            }
                                            else $h = "";
                                            
                                            //if($temp == 20) break;
                                            if(empty($key['thumbnail'])) continue;
                                            echo '<div class="grid-item">
                                            <figure class="effect-sadie">
                                                    <img data-src="'.$key['thumbnail'].'" alt="Image" class="img-fluid tm-img">
                                                    <figcaption>
                                                        <h2 class="tm-figure-title"></h2>
                                                        <p class="tm-figure-description">'.$key['title'].'</p>
                                                        <a class="popup-youtube" title="'.$key['title'].'<br><br>'.$h.'"  rel="nofollow" href="http://www.youtube.com/watch?v='.$key['short_url'].'">'.$h.'</a>
                                                    </figcaption>           
                                                </figure>
                                            </div>';
    
                                            $temp++;
                                        } 
                                    }
                                ?> 
                                     

                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Мультики -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-4"> 
                                    
                                <?php
                                    $temp = 0;
                                    foreach($model3 as $key)
                                    {
                                        if($temp == 300) break;
                                        if($key['category'] == "cartoons")
                                        {
                                            if( $key['description'] != "empty")
                                            {
                                                $h = preg_replace('/<h1[^>]*?>([\\s\\S]*?)<\/h1>/','\\1', $key['description']);
                                          
                                                $h = preg_replace('/<a[^>]*?>([\\s\\S]*?)<\/a>/','\\1', $h);
                                                $h = preg_replace('/<\/a>/','\\1', $h);
                                                $h = preg_replace('/<b[^>]*?>([\\s\\S]*?)<\/b>/','\\1', $h);
                                                $h = preg_replace('/<div[^>]*?>([\\s\\S]*?)<\/div>/','\\1', $h);
                                                $h = preg_replace('/<span[^>]*?>([\\s\\S]*?)<\/span>/','\\1', $h);
                                                $h = preg_replace('/<i[^>]*?>([\\s\\S]*?)<\/i>/','\\1', $h);
                                            }
                                            else $h = "";
    
                                            //if($temp == 20) break;
                                            if(empty($key['thumbnail'])) continue;
                                            echo '<div class="grid-item">
                                            <figure class="effect-sadie">
                                                    <img data-src="'.$key['thumbnail'].'" alt="Image" class="img-fluid tm-img">
                                                    <figcaption>
                                                        <h2 class="tm-figure-title"></h2>
                                                        <p class="tm-figure-description">'.$key['title'].'</p>
                                                        <a class="popup-youtube" title="'.$key['title'].'<br><br>'.$h.'"  rel="nofollow" href="http://www.youtube.com/watch?v='.$key['short_url'].'">'.$h.'</a>
                                                    </figcaption>           
                                                </figure>
                                            </div>';
    
                                            $temp++;
                                        } 
                                    }
                                ?> 
                                

                                </div>                      
                            </div> 
                        </div>         
                    </div>  
                </li>

                <!-- Тренд -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="4" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-4">
                                <!-- Gallery One pop up connected with JS code below -->


                                <?php
                                    $temp = 0;
                                    foreach($model3 as $key)
                                    {
                                        if($temp == 300) break;
                                        if($key['category'] == "music")
                                        {
                                            if( $key['description'] != "empty")
                                            {
                                                $h = preg_replace('/<h1[^>]*?>([\\s\\S]*?)<\/h1>/','\\1', $key['description']);
                                          
                                                $h = preg_replace('/<a[^>]*?>([\\s\\S]*?)<\/a>/','\\1', $h);
                                                $h = preg_replace('/<\/a>/','\\1', $h);
                                                $h = preg_replace('/<b[^>]*?>([\\s\\S]*?)<\/b>/','\\1', $h);
                                                $h = preg_replace('/<div[^>]*?>([\\s\\S]*?)<\/div>/','\\1', $h);
                                                $h = preg_replace('/<span[^>]*?>([\\s\\S]*?)<\/span>/','\\1', $h);
                                                $h = preg_replace('/<i[^>]*?>([\\s\\S]*?)<\/i>/','\\1', $h);
                                            }
                                            else $h = "";
    
                                            //description
                                           // if($temp == 20) break;
                                            if(empty($key['thumbnail'])) continue;
                                            echo '<div class="grid-item">
                                            <figure class="effect-sadie">
                                                    <img data-src="'.$key['thumbnail'].'" alt="Image" class="img-fluid tm-img">
                                                    <figcaption>
                                                        <h2 class="tm-figure-title"></h2>
                                                        <p class="tm-figure-description">'.$key['title'].'</p>
                                                        <a class="popup-youtube" title="'.$key['title'].'<br><br>'.$h.'"  rel="nofollow" href="http://www.youtube.com/watch?v='.$key['short_url'].'">'.$h.'</a>
                                                    </figcaption>           
                                                </figure>
                                            </div>';
    
                                            $temp++;
                                        } 
                                    }
                                ?> 
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>

                <!-- Page 4 About 
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">

                            <div class="tm-about-page">
                            
                            	<div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Multiple Columns</h2>
                                                <p class="tm-text">Set true or false in HTML page line number 40 to turn on off page color. Mauris elit elit, imperdiet nec lorem sed, finibus maximus mauris. Nam laoreet eros nec convallis placerat.</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Class aptent taciti</h2>
                                                <p class="tm-text">Aenean congue nulla et ligula consectetur consequat. Nullam fringilla blandit risus vitae auctor. Donec sed sapien varius, tincidunt nulla ut, ultrices nisl.</p>     
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Aenean auctor</h2>
                                                <p class="tm-text">Integer enim tortor, tempor quis augue luctus, condimentum porttitor urna. Maecenas condimentum suscipit tortor vitae convallis.</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Nulla vitae magna</h2>
                                                <p class="tm-text">Donec at felis at risus mattis efficitur. Pellentesque dui urna, blandit a congue ut, blandit sed eros. Sed sagittis consequat pellentesque. Vivamus eros turpis, lobortis sed fermentum euismod, vehicula id eros.</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Pellentesque dui urna</h2>
                                                <p class="tm-text">Maecenas porta placerat lacus a lacinia. In imperdiet cursus erat, luctus molestie lorem congue at. Donec fringilla tortor non ipsum semper, sit amet aliquet magna rutrum.</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                                <h2 class="tm-text-title">One Single Column</h2>
                                                <p class="tm-text">You can simply set <strong>var tm_gray_site = true;</strong> or <strong>var tm_gray_site = false;</strong> in the HTML top script tag to enable / disable gray scale or color of the page. Vivamus sit amet scelerisque diam. Donec congue feugiat consectetur. Donec facilisis, elit non suscipit pretium, lacus quam feugiat nulla, id tempus libero tellus ut nisi. Mauris non mi molestie, tristique nibh eu, auctor nibh. Fusce accumsan pretium ex in ullamcorper.</p>
                                                <p class="tm-text">Ut blandit nisi purus, eget imperdiet sapien sodales et. Duis euismod, elit in laoreet cursus, ante diam facilisis lacus, sit amet aliquam odio quam ut libero. Proin bibendum ex nec lorem semper euismod. Nulla sed urna at ligula maximus blandit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                                                   
                        </div>              
                    </div> 

                </li> -->

                <!-- 
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Feel free to say Hi!</h2>
                                                <p class="tm-text">Nulla sed urna at ligula maximus blandit. Mauris nisi ligula, ultricies ac diam id, hendrerit tincidunt ipsum. Maecenas non massa justo.</p>                                                
                                                 
                                                <form action="index.html" method="post" class="tm-contact-form">

                                                    <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                        
                                                    
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
                                                    </div> 

                                                    <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>  
                                                
                                                </form>  
                                            </div>

                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">4466 Old New St 28290, SF, California</h2> 
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> 
                </li> Page 5 Contact Us -->
            </ul>  
            
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container text-xs-center">
                    <!-- <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a> -->
              </div>
                
                <p class="tm-copyright-text">Copyright &copy; <span class="tm-copyright-year">current year</span> </p>

            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        
        <script src="/assets/lol-surprise-lp/js/tether.min.js"></script> <!-- Tether (http://tether.io/)  --> 
        <script src="/assets/lol-surprise-lp/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="/assets/lol-surprise-lp/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="/assets/lol-surprise-lp/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight
                                        + $('.tm-footer').outerHeight();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'iframe',
                    gallery:{enabled:true},
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">'+
                                '<div class="mfp-close"></div>'+
                                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                                '<div class="mfp-title">Some caption</div>'+
                                '</div>'
                    },
                    callbacks: {
                    markupParse: function(template, values, item) {
                        values.title = item.el.attr('title');
                    }
                    }
                });
				
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'iframe',
                    gallery:{enabled:true},
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">'+
                                '<div class="mfp-close"></div>'+
                                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                                '<div class="mfp-title">Some caption</div>'+
                                '</div>'
                    },
                    callbacks: {
                    markupParse: function(template, values, item) {
                        values.title = item.el.attr('title');
                    }
                    }               
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'iframe',
                    gallery:{enabled:true},
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">'+
                                '<div class="mfp-close"></div>'+
                                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                                '<div class="mfp-title">Some caption</div>'+
                                '</div>'
                    },
                    callbacks: {
                    markupParse: function(template, values, item) {
                        values.title = item.el.attr('title');
                    }
                    }        
                });

                $('.gallery-4').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'iframe',
                    gallery:{enabled:true},
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">'+
                                '<div class="mfp-close"></div>'+
                                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                                '<div class="mfp-title">Some caption</div>'+
                                '</div>'
                    },
                    callbacks: {
                    markupParse: function(template, values, item) {
                        values.title = item.el.attr('title');
                    }
                    }        
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');

                // Write current year in copyright text.
                $(".tm-copyright-year").text(new Date().getFullYear());
                           
            });  
 
            function ready() {
                setTimeout(func, 1000);
                
            }  
            function ready2() {
                setTimeout(func2, 1000);
                
            } 
            function func()
            {
                $('img[data-src]').each(function() { 
                    $(this).attr('src', $(this).attr('data-src')).removeAttr('data-src');
                }); 
               
            }
            function func2()
            {
                $('footer').css("display","block");
            }
            document.addEventListener("DOMContentLoaded", ready);
            document.addEventListener("DOMContentLoaded", ready2);
            $('.nav-link').click(function(){
                $('footer').css("display","none");
                ready2();
            });
            $("#a_1").click(function(){
                $("a.nav-link")[1].click();
            });
            $("#a_2").click(function(){
                $("a.nav-link")[2].click();
            });
            $("#a_3").click(function(){
                $("a.nav-link")[3].click();
            });
        </script>            

</body>
</html>