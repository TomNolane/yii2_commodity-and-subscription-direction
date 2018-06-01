<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Рецепт House - меню</title> 
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="/assets/recipe-house/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/recipe-house/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/recipe-house/css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/recipe-house/img/favicon.ico" type="image/x-icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.textcenter {
    text-align: center !important;
  }
  .img_2 {
    max-width: 30%;
    padding-right: 10px;
  }
  .tm-product-price-link {
    padding-top: 26px;
    font-size: 21px;
  }
  .tm-product-price {
    margin-left: 10px;
  }
  .tm-section-header {
    width: unset;
  }
  pre {
  white-space: pre-line; 
  word-wrap: break-word;
  font-family: inherit;
  background-color: transparent;
  border: none; 
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
  <div id="app">
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="/assets/recipe-house/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Рецепт House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                  <li><a href="/">Главная</a></li>
                  <li><a href="/today-special">Меню дня</a></li>
                  <li><a href="/menu" class="active">Меню</a></li>
                  <li><a href="/contact2">Контакты</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="/assets/recipe-house/img/light.png" alt="Light" class="light light-1">
          <img src="/assets/recipe-house/img/light.png" alt="Light" class="light light-2">
          <img src="/assets/recipe-house/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="/assets/recipe-house/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="/assets/recipe-house/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Рецепт House</h2>
          <p class="gray-text tm-welcome-description textcenter">На этой странице вы найдете нужный рецепт
          </p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Ознакомиться</a>      
        </div>
        <img src="/assets/recipe-house/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>

 
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Выбранный рецепт</h2>


            <view-component v-for="recipe2 in srecipes" :recipe2="recipe2"></view-component>
            <!-- <h2>Чайные традиции</h2>
            <p class="tm-welcome-description">Чай является любимым напитком народов разных стран. Он почитаем в туманной Великобритании, его любят на Востоке, без чая трудно представить себе Россию. Каждый народ создал свою традицию чаепития, чайные церемонии многих стран представляют собой красивые ритуалы. Для приготовления используется особая посуда, соблюдаются правила потребления чая.</p> -->
            <!-- <a href="" class="tm-more-button margin-top-30">Подробнее</a>  -->
          </div>
          <!-- <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="/assets/recipe-house/img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>             -->
        </section>          
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="/assets/recipe-house/img/logo.png" alt="Logo" class="tm-site-logo"> Меню</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div>
            <div class="col-lg-3 col-md-3">
              <div class="tm-position-relative margin-bottom-30">              
                <nav class="tm-side-menu">
                  <ul>
                    <li><a class="active ddd">Закуски</a></li>
                    <li><a class="ddd">Суп</a></li>
                    <li><a class="ddd">Мясо</a></li>
                    <li><a class="ddd">Курица</a></li>
                    <li><a class="ddd">Рыба</a></li>
                    <li><a class="ddd">Овощи</a></li>
                    <li><a class="ddd">Фрукты</a></li>
                    <li><a class="ddd">Второе блюдо</a></li>
                    <li><a class="ddd">Каша</a></li>
                    <li><a class="ddd">Тесто</a></li>
                    <li><a class="ddd">Десерты</a></li>
                    <li><a class="ddd">Напитки</a></li>
                    <li><a class="ddd">Грибы</a></li> 
                    <li><a class="ddd">Мороженное</a></li>
                    <li><a class="ddd">Напитки</a></li>
                    <li><a><input class="ddd2" type="text" placeholder="поиск..."/></a></li>
                  </ul>              
                </nav>    
                <img src="/assets/recipe-house/img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
              </div>  
            </div>            
            <div class="tm-menu-product-content col-lg-9 col-md-9"> <!-- menu content -->


              <result-component v-for="recipe in recipes" :recipe="recipe"></result-component>
              <!-- <div class="tm-product">
                <img src="/assets/recipe-house/img/menu-1.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Americano 1</h3>
                  <p class="tm-product-description">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>30</a>
                </div>
              </div> -->

               
            </div>
          </div>          
        </section>
      </div>
    </div> 
    <footer>
        <div class="tm-black-bg">
          <div class="container">
            <div class="row margin-bottom-60">
              <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
                <h3 class="tm-footer-div-title">Навигация</h3>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/today-special">Фирменные блюда</a></li>
                    <li><a href="/menu">Меню</a></li>
                    <li><a href="/contact2">Контакты</a></li>
                </ul>
              </nav>
              <div class="col-lg-5 col-md-5 tm-footer-div">
                <h3 class="tm-footer-div-title">О нас</h3>
                <p class="margin-top-15">Данный сайт предоставляет абсолютно бесплатно качественный контен по кулинарной тематики. Здесь вы сможете найти различные рецепты, шедевры мировой и национальной кухни.</p>
              </div>
              <div class="col-lg-4 col-md-4 tm-footer-div">
                <h3 class="tm-footer-div-title">Социальные сети</h3>
                <p>Скоро мы будем в социальных сетях!</p>
                <div class="tm-social-icons-container">
                  <!-- <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                  <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a> -->
                </div>
              </div>
            </div>          
          </div>  
        </div>      
        <div>
          <div class="container">
            <div class="row tm-copyright">
             <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2018<br>Рецепт House</p>
           </div>  
         </div>
       </div>
     </footer> 
   <!-- JS -->
   <script type="text/javascript" src="/assets/recipe-house/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="/assets/recipe-house/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
   <script>
    <?php include 'vue.php';?>
  </script>
  <script>
  $(document).ready(function(){   
    $(".ddd").click(function(){
      console.log($(this)[0].innerText);
      $(".ddd.active").removeClass('active');
      $(this).addClass('active');
      name = $(this)[0].innerText;
      app.getAllPosts();
    });
    $(".ddd2").keyup(function(){
      if($(".ddd2").val().length < 3) return;
      name = $(".ddd2").val();
      app.getAllPosts();
    });
  });
 
  Vue.component('view-component', {
    template: `<div>
    <img :src="recipe2.image" alt="Popular" class="tm-popular-item-img img-responsive">
    <h2>{{recipe2.name}}</h2>
    <p class="tm-welcome-description">{{recipe2.ingredients}}</p>
    <div class="tm-welcome-description" v-html="recipe2.recipe"></div></div>`,
      props: {
        recipe2: {}
      }
    });
  
    Vue.component('result-component', {
    template: `
    <div class="tm-product">
      <img :src="recipe.image" class="img_2" alt="Product">
      <div class="tm-product-text">
        <h3 class="tm-product-title">{{recipe.name}}</h3>
        <p class="tm-product-description">{{recipe.ingredients}}</p>
      </div>
      <div class="tm-product-price">
        <a  class="tm-product-price-link tm-handwriting-font" @click="show(recipe.id)"><span class="tm-product-price-currency"></span>читать</a>
      </div>
    </div>`,
      props: {
        recipe: {},
        _id: 1,
      },
      computed: {
        resource3: function () {
          return this.$resource('/api/v1/recipes/search?id='+ this._id)
        },
      },
      methods: { 
        show: function(ev)
        {
          this._id = ev;
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          }
          this.resource3.get().then(function (response) {
            console.log(response); 

            if(response.data[0].image == 'нету фото') response.data[0].image = "/no_photo.png";
            app.srecipes = [];
            app.srecipes = app.srecipes.concat(response.data[0]);
            $('html,body').animate({ 
              scrollTop: $('#main').offset().top
            }, 1000);
          }, function (error) { 
            console.log(error);
          })
        }
      }
    });

    var _current_page = 300;
    var _all_pages = 1;
    var name = "закуски";
    var id = 1;
  var app = new Vue({
      el: '#app',
      data: function () {
        return {
          recipes: [],
          current_page: _current_page, 
          all_pages: _all_pages,
          srecipes: [],
          name: name
        }
      },
      computed: {
        resource: function () {
          return this.$resource('/api/v1/recipes/search?tags='+this.name)
        },
        resource2: function () {
          return this.$resource('/api/v1/recipes/search?id='+id)
        },
      },
      methods: {  
        getAllPosts: function (message) {
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          }
          this.name = name;
          this.resource.get().then(function (response) {
            console.log(response);
            var dd = response.headers; 
            _all_pages = (typeof dd.map['x-pagination-page-count'] != "undefined") ? dd.map['x-pagination-page-count'][0] : dd.map['X-Pagination-Page-Count'][0];
            _current_page = (typeof dd.map['x-pagination-current-page'] != "undefined") ? dd.map['x-pagination-current-page'][0] : dd.map['X-Pagination-Current-Page'][0];
            var _data = [];
            for(var i = 0; i < response.data.length; i++)
            { 
              if(i < 30) 
              {
                if(response.data[i].image == 'нету фото') response.data[i].image = "/no_photo.png";
                  _data = _data.concat(response.data[i]); 
              }
            }
            app.srecipes = [];
            app.srecipes = app.srecipes.concat(_data[0]);
            app.recipes = [];
            app.recipes = app.recipes.concat(_data);
          }, function (error) {
            console.log(error);
          })
        }
      },
      created: function () {
        this.getAllPosts();
      }
  });
  </script>
  </div>
 </body>
 </html>