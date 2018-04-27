require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
// import {routes} from "./routes"

// Vue.use(VueRouter)


// export const router = new VueRouter({
//     mode: 'history',
//     routes
// });
Vue.component('list-projects', require('./components/projects/List-projects.vue'));

const app = new Vue({
    // router,
    el: '#app'
});
