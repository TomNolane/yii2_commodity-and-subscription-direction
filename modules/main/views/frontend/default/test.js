 Vue.component('popular-component', {
    template: `<div class="tm-popular-item">
            <img :src="recipe.image" alt="Popular" class="tm-popular-item-img img-responsive">
            <div class="tm-popular-item-description">
              <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter"></span>{{recipe.name}}</h3><hr class="tm-popular-item-hr">
              <p><strong>{{recipe.post_author}}/strong></p>
              <p>{{recipe.ingredients}}</p>  
              <p>{{recipe.recipe}}</p> 
              <p><strong class="bookmarks">Понравился рецепт? Нажмите "Ctrl" + "D" чтобы добавить его в закладки!</strong></p>
            </div>              
          </div>`,
      props: {
        recipe: {}
      }
    });

    var _current_page = 1;
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
          return this.$resource('/api/v1/youtubes/search?category=films&page=' + this.current_page)
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
            app.recipes = app.recipes.concat(response.data);
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