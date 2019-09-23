import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';

// components
import PublicPage from './components/PublicPage.vue';

// use vuex and vue-router
Vue.use(VueRouter, Vuex);

// set new vue router instance
export default new VueRouter({
    routes: [
        // public page
        { path: '/', component: PublicPage, name: 'public-page' },
    ]
})
