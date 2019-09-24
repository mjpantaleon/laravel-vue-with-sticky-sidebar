import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';

// components
import Home from './components/Home.vue';
import NewsAndUpdate from './components/NewsAndUpdate.vue';
import Register from './components/Register.vue';
import Message from './components/Message.vue';

// use vuex and vue-router
Vue.use(VueRouter, Vuex);

// set new vue router instance
export default new VueRouter({
    routes: [
        // public page
        { path: '/', component: Home, name: 'home' },
        { path: '/news', component: NewsAndUpdate, name: 'news' },
        { path: '/register', component: Register, name: 'register' },
        { path: '/message', component: Message, name: 'message' },
    ]
})
