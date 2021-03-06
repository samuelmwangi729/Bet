/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('main-component',require('./components/MainComponent.vue'));
Vue.component('volleyball-component',require('./components/VolleyBallComponent.vue').default)
Vue.component('statistics-component',require('./components/StatisticsComponent.vue').default)
Vue.component('live-component',require('./components/LiveComponent.vue').default)
Vue.component('rugby-component',require('./components/RugbyComponent.vue').default)
Vue.component('cricket-component',require('./components/CricketComponent.vue').default)
Vue.component('view-component',require('./components/ViewBetsComponent.vue').default)
Vue.component('tennis1-component',require('./components/Tennis1Component.vue').default)
Vue.component('results-component',require('./components/ResultsComponent.vue').default)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

});
