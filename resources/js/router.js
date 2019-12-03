import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';

// components
import Home from './components/Home.vue';
import NewsAndUpdate from './components/NewsAndUpdate.vue';
import Register from './components/Register.vue';
import RegisterSuccess from './components/Register/Successful.vue';
import LeaveMessage from './components/LeaveMessage.vue';
import ReceivedMessage from './components/LeaveMessage/ReceivedMessage.vue';
import TermsAndConditions from './components/TermsAndConditions.vue';

// use vuex and vue-router
Vue.use(VueRouter, Vuex);

// set new vue router instance
export default new VueRouter({
    routes: [
        // public page
        { path: '/', component: Home, name: 'home' },
        { path: '/news', component: NewsAndUpdate, name: 'news' },
        { path: '/register', component: Register, name: 'register' },
        { path: '/register-succes', component: RegisterSuccess, name: 'register-success' },

        { path: '/leave-message', component: LeaveMessage, name: 'message' },
        { path: '/message-received', component: ReceivedMessage, name: 'received-message' },

        { path: '/terms-and-conditions', component: TermsAndConditions, name: 'terms-and-conditions' },
    ]
})
