<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Рецепт House - меню дня</title>  
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
  ol {
    padding: 0;
  }
  .textcenter {
    text-align: center !important;
  }
  .order-now-link {
    padding-top: 26px;
    font-size: 21px;
  }
  .tm-popular-item {
    max-width: none;
    text-align: center;
  }
  .tm-popular-item  > img {
    margin-top: 20px; 
    margin-left: 3%;
    max-width: 93%;
  }
  .tm-popular-item-title {
    text-align: center;
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
              <img src="assets/recipe-house/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Рецепт House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                  <li><a href="/">Главная</a></li>
                  <li><a href="/today-special" class="active">Меню дня</a></li>
                  <li><a href="/menu">Меню</a></li>
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
          <img src="assets/recipe-house/img/light.png" alt="Light" class="light light-1">
          <img src="assets/recipe-house/img/light.png" alt="Light" class="light light-2">
          <img src="assets/recipe-house/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="assets/recipe-house/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Today's Special&nbsp;&nbsp;<img src="assets/recipe-house/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Рецепт House</h2>
          <p class="gray-text tm-welcome-description">В рубрике "меню-дня" публикуются текущие популярные рецепты набравшие наибольшее колвичество просмотров. Предлагаем Вам ознакомиться ниже:</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Читать</a>      
        </div>
        <img src="assets/recipe-house/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="assets/recipe-house/img/logo.png" alt="Logo" class="tm-site-logo"> Меню дня</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container"> 

           <popular-component v-for="recipe in recipes" :recipe="recipe"></popular-component> 

          </div>       
        </section>
        <section class="tm-section">   
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="assets/recipe-house/img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">      
              </div>            
              <div class="col-lg-8 col-md-8">
                  <h2>Дачное меню</h2>
                  <p>Наступило лето, а с ним и дачный сезон. Что можно приготовить на даче? Простые блюда, не требующие специальных приспособлений и большого количества посуды, ведь мыть ее на даче не очень удобно. Кроме того, на природе тратить много времени на кулинарные экзерсисы совсем не хочется, а в жаркий день и подавно.</p>
                  <ol class="margin-top-30">
                    <li>Из мяса лучше остановить свой выбор на курице или телятине – они готовятся довольно быстро. Чтобы не водиться с разделкой – купите филе или вырезку.</li> 
                    <li>Используйте натуральные молочные продукты, которые можно приобрести в сельской местности, - молоко, сливки, творог, сметану.</li>
                    <li>Заложите в морозилку несколько пачек готового слоеного дрожжевого теста – оно пригодится, когда намечается вечеринка или просто захочется выпечки. За полчаса вы приготовите вкусный пирог, а сладкий или нет – зависит только от начинки. Для нее подойдут овощи, зелень, фрукты, ягоды, творог.</li> 
                    <li>Вместо обычного чая или кофе лучше приготовить травяной чай – заварите кипятком мяту, мелиссу, лимонник, зверобой, душицу, смородиновые и вишневые листья.</li> 
                    <li>Завтрак должен быть легким. В жаркий день залейте мюсли холодным кефиром или йогуртом и/или приготовьте сэндвич со свежими овощами и зеленью. Если день прохладный, теплая овсяная каша с фруктами и горячий сэндвич будут более уместны. В жару кофе лучше не пить – он создает дополнительную нагрузку на сердце.</li> 
                    <li>Обед начните с овощного салата. На первое приготовьте зеленый суп - ботвинью, зеленые щи. Если на улице зной, освежающая окрошка будет очень кстати. Ее можно сделать на квасе или кислом молоке – кефире, йогурте, простокваше. Мясо для второго блюда лучше пожарить или потушить.</li>
                    <li>Ужин – самое подходящее время для шашлыка. Не забудьте замариновать мясо заранее. А если хотите чего-либо более легкого – приготовьте сырники или оладьи. Вечером можно расслабиться и выпить слабоалкогольный напиток – сангрию, холодный пунш. Для прохладного дня выберите горячий напиток – грог, глинтвейн или горячий пунш.</li> 
                  </ol>     
              </div>
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
   <script type="text/javascript" src="assets/recipe-house/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="assets/recipe-house/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
   <script>
   window.mobilecheck = function() {
      var check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      if(check)
      { 
        var arr = document.getElementsByClassName("bookmarks"); 
        for(var item = 0; item < arr.length; item++)  arr[item].style.display = 'none'; 
      }
      
    }();
   </script>
  <script>
    <?php include 'vue.php';?>
  </script>
  <script>
    Vue.component('popular-component', {
    template: `<div class="tm-popular-item">
            <img :src="recipe.image" alt="Popular" class="tm-popular-item-img img-responsive">
            <div class="tm-popular-item-description">
              <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>{{recipe.name}}</h3><hr class="tm-popular-item-hr">
              <p><strong>{{recipe.post_author}}</strong></p>
              <p>{{recipe.ingredients}}</p>  
              <p><pre>{{recipe.recipe}}</pre></p> 
              <p><strong class="bookmarks">Понравился рецепт? Нажмите "Ctrl" + "D" чтобы добавить его в закладки!</strong></p>
            </div>              
          </div>`,
          methods: {
        formatP(value) {
          //&lt;br&gt;
          return value;
        },
      },
      props: {
        recipe: {}
      }
    });

    var _current_page = 300;
    var _all_pages = 1;

  var app = new Vue({
      el: '#app',
      data: function () {
        return {
          recipes: [],
          current_page: _current_page, 
          all_pages: _all_pages,
        }
      },
      computed: {
        resource: function () {
          return this.$resource('/api/v1/recipes/search?page=' + this.current_page)
        },
      },
      methods: { 
        getAllPosts: function (message) {
          var options = {
            headers: {
              'Content-Type': 'application/json'
            }
          }
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
                //response.data[i].recipe = response.data[i].recipe.replace(/(?:\r\n|\r|\n)/g, '<br>');
                //console.log(response.data[i].recipe);
                _data = _data.concat(response.data[i]);
                
              }
            }
            app.recipes = app.recipes.concat(_data);
          }, function (error) {
            _current_page--;
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