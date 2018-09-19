
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// Imports
import VueRouter from 'vue-router'
import Routes from './routes'
import VueResource from 'vue-resource'

// Components
Vue.component('navbar-app', require('./components/Navbar'));
Vue.component('footer-app', require('./components/Footer'));
Vue.component('home', require('./components/Home'));
Vue.component('profile', require('./components/Profile'));
Vue.component('search', require('./components/Search'));

//Uses
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(require('vue-script2'));

//Instances
const router =  new VueRouter({
    routes: Routes,
    mode: 'history',
});

const app = new Vue({
    el: '#app',
    router: router
});