
require('./bootstrap');
window.Vue = require('vue');
export const eventBus = new Vue();

Vue.component('app-search-recipe', require('./components/SearchRecipe.vue'));
Vue.component('app-list-recipe', require('./components/ListRecipe.vue'));
Vue.component('app-detail-recipe', require('./components/DetailRecipe.vue'));

const app = new Vue({
    el: '#app-recipe'
});
