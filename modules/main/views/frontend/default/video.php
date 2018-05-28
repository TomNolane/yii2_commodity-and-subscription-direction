<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/assets/lol-surprise-lp/favicon.png">
  <title>Лучшее бесплатное видео онлайн!</title>
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

    if (tm_gray_site) {
      $('html').addClass('gray');
    } else {
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
      position: absolute;
      color: #000000;
      background: #FFFFFF;
      width: 100%;
      padding: 20px;
    }

    .tm-navbar-bg {
      overflow: hidden;
    }

    .btn-film {
      margin: 40px;
      padding: 1.75rem 7.5rem;
      font-size: 2.25rem;
      border-radius: 0.6rem;
    }

    #film1,
    #film2,
    #film3,
    #film11,
    #film22,
    #film33,
    #film111,
    #film222,
    #film333 {
      visibility: hidden;
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
//echo $model['yandex_rtb'];
?>
  <div class="container-fluid">
    <!-- Content -->
    <div class="cd-hero" id="app">

      <!-- Navigation -->
      <div class="cd-slider-nav">
        <nav class="navbar">
          <div class="tm-navbar-bg">

            <a class="navbar-brand text-uppercase" href="#">
              <img src="/assets/lol-surprise-lp/favicon.png" class="img-fluid" alt="Lifeportal.ml"> Lifeportal.ml</a>

            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
              &#9776;
            </button>

            <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">

              <ul class="nav navbar-nav">
                <li class="nav-item active selected">
                  <a class="nav-link" href="#0" data-no="1">Главная
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#0" data-no="2">Фильмы</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#0" data-no="3">Мультики</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#0" data-no="4">Тренд</a>
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
                            <h2 class="tm-text-title">Более 1000 фильмов и мультиков на нашем сайте</h2>
                            <p class="tm-text">Приветствуем Вас посетитель данного сайта! На этом сайте вы найдете множество фильмов, мультиков
                              и других видео (новых, популярных, старых, любимых) на любой вкус. Совершенно бесплатно и без
                              всякой регистрации! Достаточно перейти в нашу картотеку и наслаждаться просмотром.</p>


                               <div class="col-xs-3">
                            <p class="tm-text">Наша картотека:
                              <br>
                              <a href="#" onclick="document.querySelectorAll('a.nav-link')[1].click()" id="a_1">Фильмы</a>
                              <br>
                              <a href="#" onclick="document.querySelectorAll('a.nav-link')[2].click()" id="a_2">Мультфильмы</a>
                              <br>
                              <a href="#" onclick="document.querySelectorAll('a.nav-link')[3].click()" id="a_3">Клипы (тренд недели)</a>
                            </p>
                            </div>
                  <div class="col-xs-9">
                  <p class="tm-text">Название: <?php echo $model3['title']; ?>
                  </p>
                      <div class="tm-img-gallery-container">
                        <div class="tm-img-gallery gallery-4"> 
                            <div class="columns">
                              <youtube-component4 v-for="youtube4 in youtubes4" :youtube4="youtube4"></youtube-component4>
                            </div>
                        </div>
                      </div> 
                      <p class="tm-text">Описание: <br>  <?php echo $model3['description']; ?>
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
          </div>
        </li>

        <!-- Фильмы-->
        <li>
          <div class="cd-full-width">
            <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
              <div class="tm-img-gallery-container">
                <div class="tm-img-gallery gallery-4">




                  <search-component @message-saved="handleVilms"></search-component>

                  <div class="columns">
                    <youtube-component v-for="youtube in youtubes" :youtube="youtube"></youtube-component>
                    <!-- <div class="grid-item" id="film1">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div>
                    <div class="grid-item" id="film2">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div>
                    <div class="grid-item" id="film3">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div> -->
                  </div>

                  <div class="form-group">
                    <div class="d-flex justify-content-center">
                      <button v-on:click="add" id="singlebutton" name="singlebutton" class="btn btn-primary btn-film btn-lg">
                        Ещё
                      </button>
                    </div>
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
                  <search-component2 @message-saved2="handleVilms2"></search-component2>

                  <div class="columns">
                    <youtube-component2 v-for="youtube2 in youtubes2" :youtube2="youtube2"></youtube-component2>
                    <!-- <div class="grid-item" id="film11">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div>
                    <div class="grid-item" id="film22">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div>
                    <div class="grid-item" id="film33">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div> -->
                  </div>

                  <div class="form-group">
                    <div class="d-flex justify-content-center">
                      <button v-on:click="add2" id="singlebutton2" name="singlebutton2" class="btn btn-primary btn-film btn-lg">
                        Ещё
                      </button>
                    </div>
                  </div>
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
                  <search-component3 @message-saved3="handleVilms3"></search-component3>

                  <div class="columns">
                    <youtube-component3 v-for="youtube3 in youtubes3" :youtube3="youtube3"></youtube-component3>
                    <!-- <div class="grid-item" id="film111">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div>
                    <div class="grid-item" id="film222">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div>
                    <div class="grid-item" id="film333">
                      <figure class="effect-sadie">
                        <img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img">
                        <figcaption>
                          <h2 class="tm-figure-title"></h2>
                          <p class="tm-figure-description"> </p>
                          <a rel="nofollow" class="popup-youtube">/a></figcaption>
                      </figure>
                    </div> -->
                  </div>

                  <div class="form-group">
                    <div class="d-flex justify-content-center">
                      <button v-on:click="add3" id="singlebutton3" name="singlebutton3" class="btn btn-primary btn-film btn-lg">
                        Ещё
                      </button>
                    </div>
                  </div>
                </div>




              </div>
            </div>
          </div>
        </li>

        <!-- <li>
        <div class="cd-full-width">
          <div class="container-fluid js-tm-page-content" data-page-no="4" data-page-type="gallery">
            <div class="tm-img-gallery-container"> 



              <search-component3 @message-saved3="handleVilms3"></search-component3>
              <div class="tm-img-gallery gallery-4">
                <div class="columns">
                    <youtube-component3 v-for="youtube3 in youtubes3" :youtube3="youtube3"></youtube-component3>
                    <div class="grid-item" id="film111"><figure class="effect-sadie"><img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img"> <figcaption><h2 class="tm-figure-title"></h2> <p class="tm-figure-description">  </p> <a   rel="nofollow"  class="popup-youtube">/a></figcaption></figure></div>
                    <div class="grid-item" id="film222"><figure class="effect-sadie"><img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img"> <figcaption><h2 class="tm-figure-title"></h2> <p class="tm-figure-description">  </p> <a   rel="nofollow"  class="popup-youtube">/a></figcaption></figure></div>
                    <div class="grid-item" id="film333"><figure class="effect-sadie"><img src="https://i.ytimg.com/vi/NblWZyBsBsE/hqdefault.jpg" alt="Image" class="img-fluid tm-img"> <figcaption><h2 class="tm-figure-title"></h2> <p class="tm-figure-description">  </p> <a   rel="nofollow"  class="popup-youtube">/a></figcaption></figure></div>
                  </div>
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-center">
                  <button v-on:click="add3" id="singlebutton3" name="singlebutton3" class="btn btn-primary btn-film btn-lg">
                  Ещё
                  </button>
                </div>
              </div>





            </div>
          </div>
        </div>
      </li> -->

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

        <div class="tm-social-icons-container text-xs-center"></div> 
        <p class="tm-copyright-text"><?php echo $model['yandex_rtb']; ?><br>Copyright &copy;
          <span class="tm-copyright-year">current year</span> lifeportal.ml
        </p>

      </footer>

      </div>
      <!-- .cd-hero -->
    </div>

    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">

      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

    </div>
  </div>

  <!-- load JS files -->
  <script src="/assets/lol-surprise-lp/js/tether.min.js"></script>
  <script src="/assets/lol-surprise-lp/js/bootstrap.min.js"></script>
  <script src="/assets/lol-surprise-lp/js/hero-slider-main.js"></script>
  <script src="/assets/lol-surprise-lp/js/jquery.magnific-popup.min.js"></script>
  <script>
    <?php include 'vue.php';?>
  </script>

  <script>
    function adjustHeightOfPage(pageNo) {

      var pageContentHeight = 0;

      var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

      if (pageType != undefined && pageType == "gallery") {
        pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
      } else {
        pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
      }

      // Get the page height
      var totalPageHeight = $('.cd-slider-nav').height() +
        pageContentHeight +
        $('.tm-footer').outerHeight();

      // Adjust layout based on page height and window height
      if (totalPageHeight > $(window).height()) {
        $('.cd-hero-slider').addClass('small-screen');
        $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
      } else {
        $('.cd-hero-slider').removeClass('small-screen');
        $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
      }
    }

    /*
        Everything is loaded including images.
    */
    $(window).load(function () {

      adjustHeightOfPage(1); // Adjust page height

      /* Gallery One pop up
      -----------------------------------------*/
      $('.gallery-one').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'iframe',
        gallery: {
          enabled: true
        },
        iframe: {
          markup: '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            '<div class="mfp-title">Some caption</div>' +
            '</div>'
        },
        callbacks: {
          markupParse: function (template, values, item) {
            values.title = item.el.attr('title');
          }
        }
      });

      /* Gallery Two pop up
                -----------------------------------------*/
      $('.gallery-two').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'iframe',
        gallery: {
          enabled: true
        },
        iframe: {
          markup: '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            '<div class="mfp-title">Some caption</div>' +
            '</div>'
        },
        callbacks: {
          markupParse: function (template, values, item) {
            values.title = item.el.attr('title');
          }
        }
      });

      /* Gallery Three pop up
      -----------------------------------------*/
      $('.gallery-three').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'iframe',
        gallery: {
          enabled: true
        },
        iframe: {
          markup: '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            '<div class="mfp-title">Some caption</div>' +
            '</div>'
        },
        callbacks: {
          markupParse: function (template, values, item) {
            values.title = item.el.attr('title');
          }
        }
      });

      $('.gallery-4').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'iframe',
        gallery: {
          enabled: true
        },
        iframe: {
          markup: '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            '<div class="mfp-title">Some caption</div>' +
            '</div>'
        },
        callbacks: {
          markupParse: function (template, values, item) {
            values.title = item.el.attr('title');
          }
        }
      });

      /* Collapse menu after click 
      -----------------------------------------*/
      $('#tmNavbar a').click(function () {
        $('#tmNavbar').collapse('hide');

        adjustHeightOfPage($(this).data("no")); // Adjust page height       
      });

      /* Browser resized 
      -----------------------------------------*/
      $(window).resize(function () {
        var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

        // wait 3 seconds
        setTimeout(function () {
          adjustHeightOfPage(currentPageNo);
        }, 1000);

      });

      // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
      $('body').addClass('loaded');

      // Write current year in copyright text.
      $(".tm-copyright-year").text(new Date().getFullYear());

    }); 
  </script>
  <script>
    var _current_page_films = 1;
    var all_pages_films = 1;
    var _scrolled = false;
    var _current_page_films2 = 1;
    var all_pages_films2 = 1;
    var _scrolled2 = false;
    var _current_page_films3 = 1;
    var all_pages_films3 = 1;
    var _scrolled3 = false;
    var _scrolled4 = false;

    Vue.component("search-component", {
      template: `<div class="input-group"><input v-model="data" id="search1" class="form-control" placeholder="Поиск фильмов по названию..." @keyup="findFilms"><div class="input-group-addon" ><i class="fa fa-search"></i></div></div>`,
      data: function () {
        return {
          data: ''
        }
      },
      methods: {
        findFilms: function () {
          if (this.data.length > 2) this.$emit('message-saved', this.data);
          else if (this.data.length == 0) {
            _current_page_films = 1;
            app.youtubes = [];
            app.getAllPosts();
            $("#singlebutton").show();
          } else {
            _current_page_films = 1;
            app.youtubes = [];
          }
        }
      }
    });

    Vue.component("search-component2", {
      template: `<div class="input-group"><input v-model="data2" id="search2" class="form-control" placeholder="Поиск мультиков по названию..." @keyup="findFilms2"><div class="input-group-addon" ><i class="fa fa-search"></i></div></div>`,
      data: function () {
        return {
          data2: ''
        }
      },
      methods: {
        findFilms2: function () {
          if (this.data2.length > 2) this.$emit('message-saved2', this.data2);
          else if (this.data2.length == 0) {
            _current_page_films2 = 1;
            app.youtubes2 = [];
            app.getAllPosts2();
            $("#singlebutton2").show();
          } else {
            _current_page_films2 = 1;
            app.youtubes2 = [];
          }
        }
      }
    });

    Vue.component("search-component3", {
      template: `<div class="input-group"><input v-model="data3" id="search3" class="form-control" placeholder="Поиск клипов по названию..." @keyup="findFilms3"><div class="input-group-addon" ><i class="fa fa-search"></i></div></div>`,
      data: function () {
        return {
          data3: ''
        }
      },
      methods: {
        findFilms3: function () {
          if (this.data3.length > 2) this.$emit('message-saved3', this.data3);
          else if (this.data3.length == 0) {
            _current_page_films3 = 1;
            app.youtubes3 = [];
            app.getAllPosts3();
            $("#singlebutton3").show();
          } else {
            _current_page_films3 = 1;
            app.youtubes3 = [];
          }
        }
      }
    });

    Vue.component('youtube-component', {
      template: `<div class="grid-item">
      <figure class="effect-sadie">
              <img :src="'https://i.ytimg.com/vi/'+youtube.short_url + '/hqdefault.jpg'" alt="Image" class="img-fluid tm-img">
              <figcaption>
                  <h2 class="tm-figure-title"></h2>
                  <p class="tm-figure-description">{{youtube.title}}</p>
                  <a class="popup-youtube" :title="youtube.title+'<br><br>'+youtube.description"  rel="nofollow" :href="'http://www.youtube.com/watch?v='+youtube.short_url">{{youtube.description}}</a>
              </figcaption>           
          </figure>
    </div>`,
      props: {
        youtube: {}
      }
    });

    Vue.component('youtube-component2', {
      template: `<div class="grid-item">
      <figure class="effect-sadie">
              <img :src="'https://i.ytimg.com/vi/'+youtube2.short_url + '/hqdefault.jpg'" alt="Image" class="img-fluid tm-img">
              <figcaption>
                  <h2 class="tm-figure-title"></h2>
                  <p class="tm-figure-description">{{youtube2.title}}</p>
                  <a class="popup-youtube" :title="youtube2.title+'<br><br>'+youtube2.description"  rel="nofollow" :href="'http://www.youtube.com/watch?v='+youtube2.short_url">{{youtube2.description}}</a>
              </figcaption>           
          </figure>
    </div>`,
      props: {
        youtube2: {}
      }
    });

    Vue.component('youtube-component3', {
      template: `<div class="grid-item">
      <figure class="effect-sadie">
              <img :src="'https://i.ytimg.com/vi/'+youtube3.short_url + '/hqdefault.jpg'" alt="Image" class="img-fluid tm-img">
              <figcaption>
                  <h2 class="tm-figure-title"></h2>
                  <p class="tm-figure-description">{{youtube3.title}}</p>
                  <a class="popup-youtube" :title="youtube3.title+'<br><br>'+youtube3.description"  rel="nofollow" :href="'http://www.youtube.com/watch?v='+youtube3.short_url">{{youtube3.description}}</a>
              </figcaption>           
          </figure>
    </div>`,
      props: {
        youtube3: {}
      }
    });

    Vue.component('youtube-component4', {
      template: ` <div class="grid-item" style="width: 60%;">
      <figure class="effect-sadie">
              <img :src="'https://i.ytimg.com/vi/'+youtube4.short_url + '/hqdefault.jpg'" alt="Image" class="img-fluid tm-img">
              <figcaption>
                  <h2 class="tm-figure-title"></h2>
                  <p class="tm-figure-description">{{youtube4.title}}</p>
                  <a class="popup-youtube" :title="youtube4.title+'<br><br>'+youtube4.description"  rel="nofollow" :href="'http://www.youtube.com/watch?v='+youtube4.short_url">{{youtube4.description}}</a>
              </figcaption>           
          </figure> </div>`,
      props: {
        youtube4: {}
      }
    });

    var fff = setInterval(function () {
      $(window).resize();
    }, 1000);

    var app = new Vue({
      el: '#app',
      data: function () {
        return {
          youtubes: [],
          youtube: [],
          current_page_films: _current_page_films,
          all_pages_films: all_pages_films,
          scrolled: _scrolled,
          youtubes2: [],
          youtube2: [],
          current_page_films2: _current_page_films2,
          all_pages_films2: all_pages_films2,
          scrolled2: _scrolled2,
          youtubes3: [],
          youtube3: [],
          current_page_films3: _current_page_films3,
          all_pages_films3: all_pages_films3,
          scrolled3: _scrolled3,
          video: '',
          video2: '',
          video3: '',
          youtubes4: [],
          youtube4: [],
          scrolled4: _scrolled4,
          shor_url: "<?php echo (($model3['short_url']) ? $model3['short_url'] : "z_93aPcssLc" ); ?>"
        };
      },
      computed: {
        resource: function () {
          return this.$resource('/api/v1/youtubes/search?category=films&page=' + this.current_page_films)
        },
        resource2: function () {
          return this.$resource('/api/v1/youtubes/search?category=mults&page=' + this.current_page_films2)
        },
        resource3: function () {
          return this.$resource('/api/v1/youtubeens/search?category=music&page=' +
            this.current_page_films3)
        },
        resource4: function () {
          return this.$resource('/api/v1/youtubes/search?category=films&title=' + this
            .video)
        },
        resource5: function () {
          return this.$resource('/api/v1/youtubes/search?category=mults&title=' + this
            .video2)
        },
        resource6: function () {
          return this.$resource('/api/v1/youtubeens/search?category=music&title=' +
            this.video3)
        }
        ,
        resource7: function () {
          return this.$resource('/api/v1/youtubes/search?short_url=' + this.shor_url)
        }
      },
      methods: {
        add: function (event) {
          _scrolled = true;
          _current_page_films++;
          app.current_page_films = _current_page_films;
          this.getAllPosts();
          $('html, body').animate({
              scrollTop: $("#search1").offset().top
          }, 2000);
        },
        add2: function (event) {
          _scrolled2 = true;
          _current_page_films2++;
          app.current_page_films2 = _current_page_films2;
          this.getAllPosts2();
          $('html, body').animate({
              scrollTop: $("#search2").offset().top
          }, 2000);
        },
        add3: function (event) {
          _scrolled3 = true;
          _current_page_films3++;
          app.current_page_films3 = _current_page_films3;
          this.getAllPosts3();
          $('html, body').animate({
              scrollTop: $("#search3").offset().top
          }, 2000);
        },
        handleVilms: function (message) {
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          };
          this.video = message;
          this.resource4.get().then(function (response) {
            console.log(response);
            app.youtubes = response.data;

            if (response.data.length == 1) {
              $("#film1").css("display", "block");
              $("#film2").css("display", "block");
              $("#film3").css("display", "block");
            } else if (response.data.length == 2) {
              $("#film1").css("display", "block");
              $("#film2").css("display", "block");
              $("#film3").css("display", "none");
            } else if (response.data.length == 3) {
              $("#film1").css("display", "block");
              $("#film2").css("display", "none");
              $("#film3").css("display", "none");
            } else {
              $("#film1").css("display", "none");
              $("#film2").css("display", "none");
              $("#film3").css("display", "none");
            }

            var fff = setTimeout(function () {
              _scrolled = false;
            }, 4000);
            $("#singlebutton").hide();

          }, function (error) {
            app.youtubes = [];
            _current_page_films = 1;
            $("#film1").css("display", "none");
            $("#film2").css("display", "none");
            $("#film3").css("display", "none");
            this.getAllPosts();
            $("#singlebutton").show();
            //console.log(error);
          })
        },
        handleVilms2: function (message) {
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          };
          this.video2 = message;
          this.resource5.get().then(function (response) {
            console.log(response);
            app.youtubes2 = response.data;

            if (response.data.length == 1) {
              $("#film11").css("display", "block");
              $("#film22").css("display", "block");
              $("#film33").css("display", "block");
            } else if (response.data.length == 2) {
              $("#film11").css("display", "block");
              $("#film22").css("display", "block");
              $("#film33").css("display", "none");
            } else if (response.data.length == 3) {
              $("#film11").css("display", "block");
              $("#film22").css("display", "none");
              $("#film33").css("display", "none");
            } else {
              $("#film11").css("display", "none");
              $("#film22").css("display", "none");
              $("#film33").css("display", "none");
            }

            var fff2 = setTimeout(function () {
              _scrolled2 = false;
            }, 4000);
            $("#singlebutton2").hide();

          }, function (error) {
            app.youtubes2 = [];
            _current_page_films2 = 1;
            $("#film11").css("display", "none");
            $("#film22").css("display", "none");
            $("#film33").css("display", "none");
            this.getAllPosts2();
            $("#singlebutton2").show();
            //console.log(error);
          })
        },
        handleVilms3: function (message) {
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          };
          this.video3 = message;
          this.resource6.get().then(function (response) {
            console.log(response);
            app.youtubes3 = response.data;

            if (response.data.length == 1) {
              $("#film111").css("display", "block");
              $("#film222").css("display", "block");
              $("#film333").css("display", "block");
            } else if (response.data.length == 2) {
              $("#film111").css("display", "block");
              $("#film222").css("display", "block");
              $("#film333").css("display", "none");
            } else if (response.data.length == 3) {
              $("#film111").css("display", "block");
              $("#film222").css("display", "none");
              $("#film333").css("display", "none");
            } else {
              $("#film111").css("display", "none");
              $("#film222").css("display", "none");
              $("#film333").css("display", "none");
            }

            var fff3 = setTimeout(function () {
              _scrolled3 = false;
            }, 4000);
            $("#singlebutton3").hide();

          }, function (error) {
            app.youtubes3 = [];
            _current_page_films3 = 1;
            $("#film111").css("display", "none");
            $("#film222").css("display", "none");
            $("#film333").css("display", "none");
            this.getAllPosts3();
            $("#singlebutton3").show();
            //console.log(error);
          })
        },
        handleVilms4: function (message = "z_93aPcssLc") {
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          };
          this.shor_url = message;
          this.resource7.get().then(function (response) {
            console.log(response);
            app.youtubes4 = response.data;

            $("#film1111").css("display", "block");
            $("#film2222").css("display", "block");
            $("#film3333").css("display", "block");

            var fff4 = setTimeout(function () {
              _scrolled4 = false;
            }, 4000);

          }, function (error) {
             app.youtubes4 = app.youtubes;
            $("#film1111").css("display", "none");
            $("#film2222").css("display", "none");
            $("#film3333").css("display", "none");
          })
        },
        getAllPosts: function () {
          _scrolled = true;
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          }
          this.resource.get().then(function (response) {
            console.log(response);
            var dd = response.headers; 
            all_pages_films = (typeof dd.map['x-pagination-page-count'] != "undefined") ? dd.map['x-pagination-page-count'][0] : dd.map['X-Pagination-Page-Count'][0] ;
            _current_page_films = (typeof dd.map['x-pagination-current-page'] != "undefined") ? dd.map['x-pagination-current-page'][0] : dd.map['X-Pagination-Current-Page'][0] ;
            app.youtubes = app.youtubes.concat(response.data);
            if (app.youtubes.length % 96 == 0) {
              for (var i = 0; i < response.data.length; i++) {
                app.youtubes.shift();
              }
            }

            if (_current_page_films == all_pages_films)
              $("#singlebutton").hide();

            var fff = setInterval(function () {
              _scrolled = false;
            }, 4000);


          }, function (error) {
            _current_page_films--;
            console.log(error);
          })
        },
        getAllPosts2: function () {
          _scrolled2 = true;
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          }
          this.resource2.get().then(function (response) {
            console.log(response);
            var dd2 = response.headers;
            all_pages_films2 = (typeof dd2.map['x-pagination-page-count'] != "undefined") ? dd2.map['x-pagination-page-count'][0] : dd2.map['X-Pagination-Page-Count'][0] ;
            _current_page_films2 = (typeof dd2.map['x-pagination-current-page'] != "undefined") ? dd2.map['x-pagination-current-page'][0] : dd2.map['X-Pagination-Current-Page'][0] ;
            app.youtubes2 = app.youtubes2.concat(response.data);
            if (app.youtubes2.length % 96 == 0) {
              for (var i = 0; i < response.data.length; i++) {
                app.youtubes2.shift();
              }
            }

            if (_current_page_films2 == all_pages_films2)
              $("#singlebutton2").hide();

            var fff = setInterval(function () {
              _scrolled2 = false;
            }, 4000);


          }, function (error) {
            _current_page_films2--;
            console.log(error);
          })
        },
        getAllPosts3: function () {
          _scrolled3 = true;
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          }
          this.resource3.get().then(function (response) {
            console.log(response);
            var dd3 = response.headers;
            all_pages_films3 = (typeof dd3.map['x-pagination-page-count'] != "undefined") ? dd3.map['x-pagination-page-count'][0] : dd3.map['X-Pagination-Page-Count'][0] ;
            _current_page_films3 = (typeof dd3.map['x-pagination-current-page'] != "undefined") ? dd3.map['x-pagination-current-page'][0] : dd3.map['X-Pagination-Current-Page'][0] ;
            app.youtubes3 = app.youtubes3.concat(response.data);
            if (app.youtubes3.length % 96 == 0) {
              for (var i = 0; i < response.data.length; i++) {
                app.youtubes3.shift();
              }
            }

            if (_current_page_films3 == all_pages_films3)
              $("#singlebutton3").hide();

            var fff = setInterval(function () {
              _scrolled3 = false;
            }, 4000);


          }, function (error) {
            _current_page_films3--;
            console.log(error);
          })
        }
      },

      created: function () {
        this.handleVilms4("<?php echo (($model3['short_url']) ? $model3['short_url'] : "z_93aPcssLc" );?>");
        this.getAllPosts();
        this.getAllPosts2();
        this.getAllPosts3();
      },
      destroyed: function () {}
    });
  </script>
</body>

</html>