import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

// use Vuex
Vue.use(Vuex);

// create Vuex instance
export default new Vuex.Store({
    // store life cycle
    state: {
        // data
        welcomeMsg : 'Welcome! You have arrived at BobongMD\'s Official page. Feel free to browse the contents of this site.',
        status: '',
        message: '',

    },

    getters: {
        // getter method
        getWelcomeMsg(state){
            return state.welcomeMsg;
        },

    },

    mutations: {
        ["LEAVE_MESSAGE_REQUEST"]: (state) => {
            state.status = 'loading'
        },
        ["LEAVE_MESSAGE_SUCCESS"]: (state, payload) => {
            state.status = 'success'
            state.message = payload
        },
        ["LEAVE_MESSAGE_ERROR"]: (state) => {
            state.status = 'error'
        }
    },

    actions: {
        // leave message
        ["LEAVE_MESSAGE"] : ({commit, dispatch}, message) => {
            //returns a promis
            return new Promise((resolve, reject) => {
                commit("LEAVE_MESSAGE_REQUEST")
                axios({ url : 'api/message', data : message, method : 'POST' })
                .then(response => {
                    
                    // if the response has errors then
                    if(response.data.status != 'OK'){
                        return
                    }

                    // if no errors then
                    // commit a mutation called:
                    commit("LEAVE_MESSAGE_SUCCESS", response)
                    resolve(response)
                })
                .catch(err => {
                    commit("LEAVE_MESSAGE_ERROR",err)
                    reject(err)
                })
            })// end new Promise
        }//end leave_message
    }


})