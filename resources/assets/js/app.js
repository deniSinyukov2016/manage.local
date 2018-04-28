require('./bootstrap');

import Vue from "vue";
import axios from 'axios'

Vue.use(axios)

import VueRouter from "vue-router";
// import {routes} from "./routes"

// Vue.use(VueRouter)


// export const router = new VueRouter({
//     mode: 'history',
//     routes
// });
Vue.component('list-projects', require('./components/projects/List-projects.vue'));
Vue.component('sidebar-menu', require('./components/settings/sidebar-menu.vue'));
Vue.component('nav-bar', require('./components/settings/nav-bar.vue'));

const app = new Vue({
    // router,
    el: '#app'
});
