
require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('infinite-scroll', require('./components/InfiniteScrollComponent.vue').default);
Vue.component('infinite-loading', require('vue-infinite-loading').default);

const app = new Vue({
    el: '#app',
});
